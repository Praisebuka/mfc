<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class SendQuickMSG extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Matrix Recruitment - Quick Contact Form Submission',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.send_quick_message',
        );
    }

    public function attachments(): array
    {
        return [];
    }

}

