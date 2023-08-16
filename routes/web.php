<?php

use App\Http\Controllers\MailController;
use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Request $req) {
    if ($req->query('lng')) {
        session()->put('lng', $req->query('lng'));
        App::setlocale($req->query('lng'));
    }
    return view('Pages.Home');
})->middleware('langMiddle');

Route::get('/about', function (Request $req) {
    if ($req->query('lng')) {
        session()->put('lng', $req->query('lng'));
        App::setlocale($req->query('lng'));
    }
    return view('Pages.About');
})->middleware('langMiddle');

Route::get('/trade-finance', function (Request $req) {
    if ($req->query('lng')) {
        session()->put('lng', $req->query('lng'));
        App::setlocale($req->query('lng'));
    }
    return view('Pages.trade-finance');
})->middleware('langMiddle');

Route::get('/mortgage-finance', function (Request $req) {
    if ($req->query('lng')) {
        session()->put('lng', $req->query('lng'));
        App::setlocale($req->query('lng'));
    }
    return view('Pages.mortgage-finance');
})->middleware('langMiddle');

Route::get('/business-loan', function (Request $req) {
    if ($req->query('lng')) {
        session()->put('lng', $req->query('lng'));
        App::setlocale($req->query('lng'));
    }
    return view('Pages.business-loan');
})->middleware('langMiddle');

Route::get('/Equipment-Machiner', function (Request $req) {
    if ($req->query('lng')) {
        session()->put('lng', $req->query('lng'));
        App::setlocale($req->query('lng'));
    }
    return view('Pages.Equipment-Machiner');
})->middleware('langMiddle');

Route::get('/Trade-Credit-Insurance/{lang?}', function (Request $req) {
    if ($req->query('lng')) {
        session()->put('lng', $req->query('lng'));
        App::setlocale($req->query('lng'));
    }
    return view('Pages.Trade-Credit-Insurance');
})->middleware('langMiddle');

Route::get('/contact/{lang?}', function (Request $req) {
    if ($req->query('lng')) {
        session()->put('lng', $req->query('lng'));
        App::setlocale($req->query('lng'));
    }
    return view('Pages.contact');
})->middleware('langMiddle');

Route::post('/contact', function () {
    $details = [
        'name' => request('name'),
        'email' => request('email'),
        'phone' => request('phone'),
        'message' => request('message'),
    ];

    $receiver = env('MAIL_RECEIVER_EMAIL');

    Mail::to($receiver)
        ->send(new ContactEmail($details));

    return redirect()
        ->back()
        ->with([
            'msg-success' => 'Thanks for contacting we will get back to you soon.'
        ]);
});

Route::get('/Equipment-Machinery/{lang?}', function (Request $req) {
    if ($req->query('lng')) {
        session()->put('lng', $req->query('lng'));
        App::setlocale($req->query('lng'));
    }
    return view('Pages.Equipment-Machinery');
})->middleware('langMiddle');
