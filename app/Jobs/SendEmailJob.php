<?php

namespace App\Jobs;
use Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\MailLooking;
class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    // public $messages;
    public $booking;
    public $email;
    public $file;

    public function __construct($booking,$email,$file)
    {
        // $this->messages = $message;
        $this->booking = $booking;
        $this->email = $email;
        $this->file = $file;
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->email)->send(new MailLooking($this->booking,$this->file));
        //
    }
}
