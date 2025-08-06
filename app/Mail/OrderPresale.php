<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class OrderPresale extends Mailable
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
            subject: 'Thank You for Pre-ordering My Family Companion! 💙',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.order_presale_for_local',
        );
    }

    public function attachments(): array
    {
        return [];
    }

}

