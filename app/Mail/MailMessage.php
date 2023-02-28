<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailMessage extends Mailable
{
    use Queueable, SerializesModels;
     public $url;
     public $activite =[];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($activite,$url)
    {
        $this->activite=$activite;
        $this->url=$url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('barrett@example.com', 'Barrett Blair')->markdown('emails.activite');
    }
}
