<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactMail extends Mailable
{
    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build(): ContactMail
    {
        return $this
            ->subject('Nowe zapytanie z portfolio')
            ->view('emails.contact');
    }
}

