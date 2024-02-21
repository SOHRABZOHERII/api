<?php

namespace App\Mail;

use App\Models\Text;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class TestMail extends Mailable
{
    use Queueable, SerializesModels;
public $inputValue;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $inputValue)
    {
        $this->inputValue = $inputValue;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.mail' , ['inputValue'])->subject('ایمیل برای تست');
    }
}
