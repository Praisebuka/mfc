<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class BookFreeSession extends Mailable
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
            subject: 'Welcome to "Ask Dr. OVO" Family Health Q&A',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.book_free_session',
        );
    }

    public function attachments(): array
    {
        return [];
    }

}

