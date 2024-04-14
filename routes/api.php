<?php

use App\Events\test;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');



// Public Routes
Route::post('/auth/register',[AuthController::class,'register']);
Route::get('test',function(){
    event(new test('Hello Dennis from api'));
    return 'done';
});