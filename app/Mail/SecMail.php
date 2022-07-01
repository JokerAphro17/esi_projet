<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SecMail extends Mailable
{
    use Queueable, SerializesModels;
    public $secretary;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->secretary = $user;
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
