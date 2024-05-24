<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Braintree\Gateway;
use Illuminate\Http\Request;

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
        $clientToken = $this->gateway->clientToken()->generate();
        return response()->json(['token' => $clientToken]);
    }

    public function checkout(OrderRequest $request)
    {

        // $request->validated();
        $data = $request->all();

        $token = $request->input('token');
        $customer_name = $request->input('customer_name');
        $customer_lastname = $request->input('customer_lastname');
        $customer_email = $request->input('customer_email');
        $customer_phone = $request->input('customer_phone');
        $customer_address = $request->input('customer_address');
        $orderData = json_decode($request->input('orderData'), true);
        $order_total = $request->input('order_total');
        $amount = $request->input('amount');

        $newOrder = $request->validate([
            'customer_name' => 'required',
            'customer_lastname' => 'required',
            'customer_email' => 'required|email',
            'customer_address' => 'required',
            'customer_phone' => 'required|max:10',
            'order_total' => 'required',
        ]);

        // $amount = $request->input('order_total'); // L'importo che vuoi addebitare
        $nonce = $request->paymentMethodNonce;

        $result = $this->gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if ($result->success) {
            $data = [
                'success' => true,
                'message' => 'Transazione eseguita con successo!',
                'customer_name' => $customer_name,
                'customer_lastname' => $customer_lastname,
                'customer_email' => $customer_email,
                'customer_phone' => $customer_phone,
                'customer_address' => $customer_address,
                'amount' => $amount,
            ];
            
            // salvataggio nuovo ordine nel DB
            $order = new Order();
            $order->fill($newOrder);
            $order->save();

            foreach ($orderData as $dish) {
                // You can use the attach method if you have defined a many-to-many relationship in your Order model.
                $order->dishes()->attach($dish['id'], ['quantity' => $dish['quantity']]);
            }

            return response()->json($data, 200);

        } else {
            $data = [
                'success' => false,
                'message' => 'Transazione fallita!'
            ];

            return response()->json($data, 401);
        }

        // $orders = [
        //     'customer_name' => $request->input('customer_name'),
        //     'customer_lastname' => $request->input('customer_lastname'),
        //     'customer_email' => $request->input('customer_email'),
        //     'customer_address' => $request->input('customer_address'),
        //     'customer_phone' => $request->input('customer_phone')
        // ];
    
        // $dishes = $request->input('dishes'); // Assuming 'dishes' is an array of dish data
        // $totalCartPrice = $request->input('totalCartPrice');

        

        

        if ($result->success) {
            return response()->json(['success' => true, 'transaction' => $result->transaction]);
        } else {
            return response()->json(['success' => false, 'error' => $result->message], 500);
        }
    }
}
