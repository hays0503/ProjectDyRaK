<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('login');
// });

Route::view('/','index');

Route::name('user.')->group(function(){
    Route::view('/private','private')->middleware('auth')->name('private');

    Route::get('/login',function(){

        if(Auth::check()){
            return redirect(route('user.private'));
        }

        return view('login');
    })->name('login');

    // Route::post('/login', []);

    // Route::get('/logout', [])->name('logout');

    Route::get('/registration', function (){
        
        if(Auth::check()){
            return redirect(route('user.private'));
        }

        return view('registration');
    })->name('registration');

    // Route::post('/registration',[]);

});

Route::get('/game', function () {
    return view('welcome');
});
