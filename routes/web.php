<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/authorisation', function () {
    return view('llogin');
});
Route::get('/reg', function () {
    return view('reg');
});
Route::get('/profile', function (){
    if(Auth::check()){
    return view('profile');
    }
    else{
        return redirect(route('login'));
    }
})->name('profile');

Route::name('user.')->group(function(){
    Route::view('/', 'home')->middleware('auth')->name('private');
    Route::get('/login', function(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('login');
    })->name('login');
    // Route::post('/login', [])
    // Route::get('/logout', [])->name('logout');
    Route::get('/registration', function(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('registration');
    })->name('registration');
    Route::post('/registration', [RegisterController::class, 'save']);
    // Route::get('/profile', function(){
    //     if(Auth::check()){
    //         return redirect(route('profile'));
    //     }
    //     return redirect('login');
    // });
});
    
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
