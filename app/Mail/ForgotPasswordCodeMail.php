<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ForgotPasswordCodeMail extends Mailable
{
    public $verification_code;
    public $user;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($user,$verification_code)
    {   $this->user=$user;
       $this->verification_code=$verification_code;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(

            subject: 'Forgot Password Code Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.forgot-password-email',
                with: [
                'user' => $this->user,
                'verification_code' => $this->verification_code,
            ],
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
