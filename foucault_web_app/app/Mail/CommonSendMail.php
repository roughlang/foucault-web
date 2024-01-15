<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CommonSendMail extends Mailable
{
  use Queueable, SerializesModels;

  protected $title;
  protected $body;

  /**
   * Create a new message instance.
   */
  public function __construct($title, $body)
  {
    $this->title = $title;
    $this->body = $body;
  }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
      return new Envelope(
        subject: $this->title,
      );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
      return new Content(
        view: 'mail.CommonSendMail',
        with: [
          'body' => $this->body,
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
