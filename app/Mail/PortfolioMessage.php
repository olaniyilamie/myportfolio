<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class PortfolioMessage extends Mailable
{
    use Queueable, SerializesModels;
   
    public $contactform;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->contactform = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('olaniyilamie@gmail.com')->view('mailview')->with('contactform',$this->contactform);
        //return view('mailview');
    }
}
