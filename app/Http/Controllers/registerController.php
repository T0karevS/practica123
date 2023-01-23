<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class registerController extends Controller
{
    public  function save(Request $request){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        $validateFields = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if (User::where('email', $validateFields['email'])->exists()){
            redirect(route('user.private'))->withErrors([
                'formError'=>'Email уже используется'
            ]);
        }
        $user = User::create($validateFields);
        if ($user) {
            Auth::login($user);
            return redirect(route('user.private'))->withErrors([
                'formError'=>'произошла ошибка при сохранении пользователя'
            ]);
        }
    }
}
