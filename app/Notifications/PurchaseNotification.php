<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PurchaseNotification extends Notification
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
            ->subject('New Gift Card Purchase Details')
            ->greeting('New Gift Card Purchase Request')
            ->line('A new gift card purchase request has been submitted with the following details:');

        foreach ($this->data as $key => $value) {
            $label = ucwords(str_replace('_', ' ', $key));

            // If the value is a URL (like image URLs), make it a clickable link
            if (filter_var($value, FILTER_VALIDATE_URL)) {
                $message->action("View $label", $value);
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
        return [
            //
        ];
    }
}
