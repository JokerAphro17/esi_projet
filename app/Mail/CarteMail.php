<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Etudiant;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class carteMail extends Mailable
{
    use Queueable, SerializesModels;
    public $stud;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Etudiant $etudiant)
    {
        $this->stud = $etudiant;
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
