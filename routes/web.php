
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// MERIDIAN Homepage
Route::get('/', function () {
    return view('home');
});

// MERIDIAN Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// MERIDIAN Contact Form Submission
Route::post('/contact', function (Request $request) {

    // Validate the submitted contact information
    $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:150',
        'message' => 'required|string|max:2000',
    ]);

    // Return a success message after validation
    return redirect()->route('contact')->with(
        'contact_success',
        'Thank you! Your message has been submitted successfully.'
    );

})->name('contact.submit');
