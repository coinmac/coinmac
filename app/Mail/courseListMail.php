<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

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
        if(isset($this->clist->subjectname)){
            return $this->from('info@coinmac.org','COINMAC Inc')->subject($this->clist->subjectname)->view('ccmail')->with(['clist' => $this->clist]);
        }elseif(isset($this->clist->ntitle)){
            return $this->from('info@coinmac.org','COINMAC Inc')->subject($this->clist->ntitle)->view('nlmail')->with(['clist' => $this->clist]);
        }elseif(isset($this->clist->messages)){
            return $this->from('info@coinmac.org','COINMAC Inc')->subject("COINMAC.ORG Feedback/Contact")->view('contactmail')->with(['clist' => $this->clist]);
        }else{
            return $this->from('info@coinmac.org','COINMAC Inc')->subject($this->clist[0]->coursecategory)->view('clmail')->with(['clist' => $this->clist]);
        }        
        
    }
}
