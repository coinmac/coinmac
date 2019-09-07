<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class courseListMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $clist;
    
    public function __construct($clist)
    {
    $this->clist = $clist;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@coinmac.org','COINMAC Inc')->subject('COINMAC '.$this->clist[0]->coursecategory.')->view('clmail')->with(['clist' => $this->clist]);;
    }
}
