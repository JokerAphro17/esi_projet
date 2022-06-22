<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user=[];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('aphrocg@hotmail.com')
                    ->subject('Bienvenue sur l\'application de gestion des étudiants')
                    ->markdown('mail.mailer');
    }
}
