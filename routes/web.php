<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Routes;
use App\Http\Controllers\ProfileController;

use App\User;

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

Route::get('/friends', function(){
    return view('friends');
});
Route::get('/profile', function (){
    if(Auth::check()){
    return view('profile');
    }
    else{
        return redirect(route('login'));
    }
})->name('profile');
Route::get('/user/{id}', [ProfileController::class, 'index']);
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
    
});
Route::post('/registration', [App\Http\Controllers\registerController::class, 'save'])->name('user.registration.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('user.profile.store');