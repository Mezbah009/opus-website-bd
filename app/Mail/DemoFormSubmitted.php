<?php

namespace App\Mail;

use App\Models\Demo;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemoFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $demo;

    public function __construct(Demo $demo)
    {
        $this->demo = $demo;
    }

    public function build()
    {
        return $this->subject('New Demo Request Submitted')
                    ->view('emails.demo_form');
    }
}
