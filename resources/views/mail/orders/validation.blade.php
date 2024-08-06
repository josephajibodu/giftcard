<x-mail::message>
# Dear Customer,

Thank you for submitting your gift card for validation on GiftValidator. We want to confirm that we have received your request and it is now in our system for processing.

## Key Details:
- Request Received: {{ now()->format('Y-m-d H:i:s') }}
- Gift Card Number: {{ substr($data['card_number'] ?? '', -4) }}

## What's Next:
Our team will carefully review your gift card details. We aim to complete this process and get back to you via email within the next 1-3 hours.

If you have any questions or need to provide additional information, please don't hesitate to reply to this email.

We appreciate your patience and thank you for choosing {{ config('app.name') }}.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
