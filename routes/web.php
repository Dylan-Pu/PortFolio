<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Page d'accueil
Route::get('/', function () {
    return view('home');
})->name('home');

// Page À propos
Route::get('/a-propos', function () {
    return view('about');
})->name('about');

// Page Projets
Route::get('/projets', function () {
    return view('projects');
})->name('projects');

// Page Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    Mail::raw("Nouveau message de {$data['name']} ({$data['email']}):\n\n{$data['message']}", function ($message) use ($data) {
        $message->to('putzoludylan@gmail.com')
                ->subject('Nouveau message depuis ton portfolio');
    });

    return redirect('/contact')->with('success', true);
});