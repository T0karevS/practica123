<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FriendsController extends Controller
{
    public function getUsers()
    {
        $id = Auth::id();
        $allusers = DB::table('users')->where('id','!=', $id)->get();
        return view('/friends', compact('allusers'));
    }
}
