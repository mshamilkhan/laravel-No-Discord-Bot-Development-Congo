<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'login'])->name('login.submit');



// Route::get('/' , function(){
//     return view('login');
// });
Route::get('/signup' , function(){
    return view('signup');
});