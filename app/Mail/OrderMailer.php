<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMailer extends Mailable
{
     use Queueable, SerializesModels;

    protected $order; 

    public function __construct($data)
    {
        $this->order = $data;
    }

    public function build()
    {
       return $this->view('show')
       ->with([
        'name' => $this->order->name,
]);

    }
}
