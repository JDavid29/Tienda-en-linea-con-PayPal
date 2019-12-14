<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageReceived extends Mailable
{
    use Queueable, SerializesModels;
    /*VARIABLE PUBLICA DE ASUNTO*/
    public $subject = 'Mensaje recibido';

    public $msg;//para ser visible en las vistas
    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($msg)
    {
        //Recibimos la variable la asignamos al objeto
        $this->msg = $msg;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.message-received');
    }
}
