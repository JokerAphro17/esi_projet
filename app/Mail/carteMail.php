<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class carteMail extends Mailable
{
    use Queueable, SerializesModels;
    public $stud=[];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $user)
    {
        $this->stud = $user;
    }
    

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('aphrocg@hotmail.com')
                    ->subject('Carte Etudiant disponible')
                    ->markdown('mail.mailer');
    }
}
