<?php

use App\Http\Controllers\InfosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function() {
    return 'Login';
});

Route::get('/user/{name}', function($name) {
    return 'Hallo ' . $name;
});

Route::get( '/data', function() {
    return ['firstname' => 'Jörg', 'lastname' => 'Aderhold'];
});

Route::get( '/user', function() {
    $id = request('id');
    return 'Hallo, Deine ID lautet: ' . $id;
});

// Phase 2

Route::get( '/user', function() {
    return view('user', [
        'id' => request('id')
    ]);
});

// Phase 3

Route::get('/infos', [InfosController::class, 'show']);

// Arbeit mit Views
Route::get( '/kommentar', function() {
    $comment = 'Hier ist alles <strong>super</strong>!';
    return view('comments', [
        'comment' => $comment,
        'songs' => 3,
        'loggedIn' => false
    ]);
});

/* === Master- / Child-Templates
============================================================================================= */
Route::get( '/child', function() {
    return view('child');
});
Route::get( '/sibling', function() {
    return view('sibling');
});

/* === Übung 1
============================================================================================= */
// 1a

Route::get('/start', function () {
    return view('u1-start');
});
Route::get('/login', function () {
    return view('u1-login');
});
Route::get('/logout', function () {
    return view('u1-logout');
});
Route::get('/register', function () {
    return view('u1-register');
});



















// 1b

// Route::get( '/start', function() {
//     return view('u1-start', [
//         'content' => 'Willkommen auf unserer Seite'
//     ]);
// });
// Route::get( '/login', function() {
//     return view('u1-login', [
//         'content' => 'Bitte Einloggen'
//     ]);
// });
// Route::get( '/logout', function() {
//     return view('u1-logout', [
//         'content' => 'Logout erfolgreich'
//     ]);
// });
// Route::get( '/register', function() {
//     return view('u1-register', [
//         'content' => 'Bitte registrieren'
//     ]);
// });