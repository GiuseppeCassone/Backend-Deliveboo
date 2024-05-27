<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Mail\NewOrder;
use App\Mail\NewUserOrder;
use App\Models\Order;
use Braintree\Gateway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    protected $gateway;

    public function __construct()
    {
        $this->gateway = new Gateway([
            'environment' => config('braintree.environment'),
            'merchantId' => config('braintree.merchantId'),
            'publicKey' => config('braintree.publicKey'),
            'privateKey' => config('braintree.privateKey')
        ]);
    }

    public function token()
    {
        try {
            $clientToken = $this->gateway->clientToken()->generate();
            return response()->json(['token' => $clientToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unable to generate client token'], 500);
        }
    }

    public function checkout(Request $request)
    {
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_lastname' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_address' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:10',
            'order_total' => 'required|numeric',
            'paymentMethodNonce' => 'required|string',
        ]);

        $nonce = $validatedData['paymentMethodNonce'];
        $amount = $validatedData['order_total'];

        try {
            $result = $this->gateway->transaction()->sale([
                'amount' => $amount,
                'paymentMethodNonce' => $nonce,
                'options' => [
                    'submitForSettlement' => true
                ]
            ]);

            if ($result->success) {
                $order = new Order();
                $order->fill($validatedData);
                $order->save();

                // Qui avviene il collegamento con la tabella dish_order
                $orderData = json_decode($request->input('orderData'), true);
                if (!is_array($orderData)) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Dati dell\'ordine non validi!',
                    ], 400);
                }

                foreach ($orderData as $dish) {
                    if (isset($dish['dish_id']) && isset($dish['quantity'])) {
                        $order->dishes()->attach($dish['dish_id'], ['quantity' => $dish['quantity']]);
                    } else {
                        return response()->json([
                            'success' => false,
                            'message' => 'Formato dei dati dell\'ordine non valido!',
                        ], 400);
                    }
                }

                Mail::to($order->customer_email)->send(new NewUserOrder($order));
                Mail::to('progettoFinale-118@hotmail.com')->send(new NewOrder($order));

                return response()->json([
                    'success' => true,
                    'message' => 'Transazione eseguita con successo!',
                    'order' => $order
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Transazione fallita!'
                ], 401);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Errore durante la transazione!',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
