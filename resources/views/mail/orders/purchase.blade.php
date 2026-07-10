<x-mail::message>
# Dear Customer,

Thank you for purchasing a gift card from EgiftChecker. We're excited to confirm that your order has been successfully processed.

## Order Details:
- Order Number: {{ \Illuminate\Support\Str::random() }}
- Gift Card Value: ${{ $data['total'] ?? 'N/A' }}
- Date of Purchase: {{ now()->format('F j, Y g:i A T') }}

## Next Steps:
Your digital gift card will be delivered to this email address within the next 1-3 hours. Please keep an eye on your inbox (and spam folder, just in case).

What to Expect:
- The email will contain your gift card code and instructions on how to use it.
- If you selected a specific design or added a personalized message, these will be included with your gift card.

If you don't receive your gift card within 3 hours, please check your spam folder. If you still can't find it, don't hesitate to contact our customer support team at [support email/phone number].

We appreciate your business and hope your gift brings joy to its recipient!

Thanks,<br>
{{ config('app.name') }}

P.S. If you have any questions about your purchase or need assistance, please reply to this email or contact our customer support team.
</x-mail::message>
