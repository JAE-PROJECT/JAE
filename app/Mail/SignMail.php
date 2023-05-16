<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Event;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class SignMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $event;
    /**
     * Create a new message instance.
     */
    public function __construct(User $user, Event $event)
    {
        $this->user = $user;
        $this->event = $event;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject:  'Carte d\'invitation',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.sign', with:['user'=>$this->user, 'event'=>$this->event],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
