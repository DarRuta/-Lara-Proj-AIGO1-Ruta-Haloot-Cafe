
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// MERIDIAN Homepage
Route::get('/', function () {
    return view('home');
});

// MERIDIAN About Page
Route::view('/about', 'about')->name('about');

// MERIDIAN Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// MERIDIAN Contact Form Submission
Route::post('/contact', function (Request $request) {

    $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:150',
        'message' => 'required|string|max:2000',
    ]);

    return redirect()->route('contact')->with(
        'contact_success',
        'Thank you! Your message has been submitted successfully.'
    );

})->name('contact.submit');