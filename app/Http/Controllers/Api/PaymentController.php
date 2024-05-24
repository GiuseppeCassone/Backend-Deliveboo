<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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

    public function checkout(Request $request)
    {
        

        $orders = [
            'customer_name' => $request->input('customer_name'),
            'customer_lastname' => $request->input('customer_lastname'),
            'customer_email' => $request->input('customer_email'),
            'customer_address' => $request->input('customer_address'),
            'customer_phone' => $request->input('customer_phone')
        ];
    
        $dishes = $request->input('dishes'); // Assuming 'dishes' is an array of dish data
        $totalCartPrice = $request->input('totalCartPrice');

        $amount = $request->input('order_total'); // L'importo che vuoi addebitare
        $nonce = $request->paymentMethodNonce;

        $result = $this->gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if ($result->success) {
            return response()->json(['success' => true, 'transaction' => $result->transaction]);
        } else {
            return response()->json(['success' => false, 'error' => $result->message], 500);
        }
    }
}
