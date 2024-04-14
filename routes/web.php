<?php

use App\Events\privateEvent;
use App\Events\test;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/chat', function () {
    return view('welcome');
})->middleware('auth');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('register', function () {
    return view('register');
});

Route::post('register',[AuthController::class,'register']);


Route::get('test', function () {
    event(new test('Hello Dennis'));
    return 'done';
});

Route::get('send',function(){
    event(new privateEvent('my gee',1));
    return 'sent';
});
