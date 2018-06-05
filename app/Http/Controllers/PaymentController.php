<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use App\Mail\Thanks;
use Auth;
use App\Order;
use App\Shipping;
use Session;

class PaymentController extends Controller
{
 
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        
        $paymentDetails = Paystack::getPaymentData();
        // dd($paymentDetails);
        $authorize = $paymentDetails['data']['authorization']['authorization_code'];
        $user = Auth::user();
       
        $shipping = Shipping::where('email', $paymentDetails['data']['customer']['email'])->orderBy('id', 'desc')->first();;
        
        $order = Order::find($shipping->order_id);
        $order->authentication_id = $authorize;
        $order->save();
         \Mail::to($user)->send(new Thanks($order));
        Session::forget('cart');
        
       $order->cart = unserialize($order->cart);
       

        // dd($order->cart);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want

        return view('shop.confirm', ['payment' => $paymentDetails]);
    }

    public function payOnDelivery($id){

       
        
        $order = Order::find($id);
        $user = Auth::user();
         \Mail::to($user)->send(new Thanks($order));
        Session::forget('cart');

        return view('shop.confirm');
    }
}