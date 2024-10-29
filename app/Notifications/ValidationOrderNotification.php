<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ValidationOrderNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public array $data)
    {}

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $message = (new MailMessage)
            ->subject('New Gift Card Validation Details')
            ->greeting('New Gift Card Validation Request')
            ->line('A new gift card validation request has been submitted with the following details:');

        foreach ($this->data as $key => $value) {
            $label = ucwords(str_replace('_', ' ', $key));

            if (filter_var($value, FILTER_VALIDATE_URL)) {
                // For image URLs, include them as markdown links instead of actions
                $message->line("**$label**: [View Image]($value)");
            } else {
                $message->line("**$label**: $value");
            }
        }

        return $message->salutation('Regards');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [];
    }
}
