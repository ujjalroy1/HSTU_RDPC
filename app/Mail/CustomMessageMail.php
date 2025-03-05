<?php

use Illuminate\Mail\Mailable;

class CustomMessageMail extends Mailable
{
    public $messageContent;

    public function __construct($messageContent)
    {
        $this->messageContent = $messageContent;
    }

    public function build()
    {
        return $this->subject('RDCPC Update')
            ->html($this->messageContent); // Send the HTML content directly
    }
}
