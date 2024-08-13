<?php

namespace App\Http\Controllers;

use App\Mail\PurchaseOrderReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PurchaseGiftcardController extends Controller
{
    public static float $FEE = 0.015;

    public function store()
    {
        // Get all the data that is not null
        $data = array_filter(request()->all(), function($value) {
            return !is_null($value);
        });

        // Remove _token from the data
        unset($data['_token']);

        // update with the total amount
        $data['total'] = $data['amount'] * $data['quantity'] * (1 + self::$FEE);

        // Handle file upload if present
        if (request()->hasFile('payment_screenshot')) {
            $path = request()->file('payment_screenshot')->store('payment_screenshots', 'public');
            $data['payment_screenshot'] = Storage::url($path);
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

        // Send confirmation email to the user
        Mail::to($data['gift_email'] ?? $data['gift_email_1'])->send(new PurchaseOrderReceived($data));


        // Check payment option and flash appropriate message
        if (request()->input('payment-option') === 'card') {
            return redirect()->back()->with('error', 'Payment processing failed. Please try again.');
        } else {
            return redirect()->back()->with('success', 'Request submitted successfully. Your giftcard will be sent to the submitted email address after payment confirmation');
        }
    }
}
