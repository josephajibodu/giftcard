<?php

use App\Http\Controllers\GiftcardController;
use App\Http\Controllers\PurchaseGiftcardController;
use App\Http\Controllers\ValidateGiftcardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('contact-us', 'contact')->name('contact-us');
Route::post('contact-us', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    $data = $request->all();

    unset($data['_token']);

    // get response emails (array of emails)
    $emails = app(\App\Settings\GeneralSetting::class)->receiving_email;

    // Send email logic (you can customize this as per your requirement)
    Mail::raw(json_encode($data, JSON_PRETTY_PRINT), function ($message) use ($emails, $request) {

        foreach ($emails as $email) {
            $message->to($email);
        }
        $message->subject($request->subject)
            ->replyTo($request->email);

    });

    return redirect()->route('contact-us')->with('success', 'Your message has been sent successfully!');
})->name('contact-us');

Route::view('about-us', 'about')->name('about-us');
Route::view('frequently-asked-questions', 'faq')->name('faq');

Route::get('giftcards', [GiftcardController::class, 'index'])->name('giftcards.index');
Route::get('giftcards/{name}', [GiftcardController::class, 'show'])->name('giftcards.show');

Route::post('giftcards/{name}/purchase', [PurchaseGiftcardController::class, 'store'])->name('giftcards.purchase');
Route::post('giftcards/{name}/validate', [ValidateGiftcardController::class, 'store'])->name('giftcards.validate');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

//require __DIR__.'/auth.php';
