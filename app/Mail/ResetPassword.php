<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;

  private $code;
    public function __construct($code)
    {
        $this->code=$code;
    }

    public function build()
    {
        return $this->markdown('emails.ResetPassword',['code'=>$this->code]);
    }
}
