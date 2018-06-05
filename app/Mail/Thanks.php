<?php

namespace App\Mail;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Thanks extends Mailable
{
    use Queueable, SerializesModels;

    protected $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        
       $this->order =  $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.thanks')
        ->with([
            
            'orderFirstName' => $this->order->shipping->first_name,
            'orderId' => $this->order->id,
            'orderLastName' => $this->order->shipping->last_name,
            'orderAddress' => $this->order->shipping->address,
            'orderLandmark' => $this->order->shipping->landmark,
            'orderCity' => $this->order->shipping->last_city,
            'orderPhone' => $this->order->shipping->phone,
            'orderEmail' => $this->order->shipping->email,
            'orderCart' => unserialize($this->order->cart)
        ]);
    }
}
