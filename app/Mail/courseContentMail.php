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
    public $type;
    
    public function __construct($cc,$type)
    {
    $this->cc = $cc;
    $this->type = $type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@coinmac.org','COINMAC Inc')->subject($this->cc->subjectname)->view('ccmail')->with(['cc' => $this->cc,'type'=>$this->type]);
    }
}
