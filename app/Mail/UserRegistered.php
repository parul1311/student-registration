<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserRegistered extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $admin;

    public function __construct($user,$admin = false)
    {
        $this->user = $user;
        $this->admin = $admin;
    }

    public function build()
    {
        if($this->admin)
        return $this->subject('New Student Register '.env('APP_NAME'))
            ->view('emails.register-admin'); // Create this Blade view
        else
        return $this->subject('Welcome to Your '.env('APP_NAME'))
            ->view('emails.register'); // Create this Blade view
    }
}
