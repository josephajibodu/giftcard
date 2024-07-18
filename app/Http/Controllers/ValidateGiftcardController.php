<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidateGiftcardController extends Controller
{
    public function store()
    {
        // logic here
        // session flash
        return redirect()->route('giftcards.index');
    }
}
