<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailLooking extends Mailable
{
    use Queueable, SerializesModels;
    public $booking;
    public $mess;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($booking,$mess)
    {
        //
        $this->booking = $booking;
        $this->mess = $mess;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.mail')->subject("FindHomeD Marketing");
    }
}
