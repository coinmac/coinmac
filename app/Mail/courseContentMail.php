<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class courseContentMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $cc;
    
    public function __construct($cc)
    {
    $this->cc = $cc;   
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@coinmac.org','COINMAC Inc')->subject($this->cc[0]->subjectname)->view('ccmail')->with(['cc' => $this->cc]);
    }
}
