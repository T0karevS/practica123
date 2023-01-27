<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $user =  User::where('id',$id)->get();
        if(!$user){
            abort(404);
        }
        $allposts = DB::table('_posts')->where('user_id', $id)->get();
        return view('profile', compact('user'), compact('allposts'));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
        ]);
        $newEmail = $request->email;
        $newName = $request->name;  
        $avatarName = time().'.'.$request->avatar->getClientOriginalExtension();
        $request->avatar->move(public_path('avatars'), $avatarName);
  
        Auth()->user()->update(['avatar'=>$avatarName, 'email'=>$newEmail, 'name'=>$newName]);
  
        return back()->with('success', 'profile updated successfully.');
    }
    public function UpdPost($id)
    {
        $newCon = $request->content;
        $userID = Auth::id();  
        $category = $request->category;
        $imgName = time().'.'.$request->img->getClientOriginalExtension();
        $request->img->move(public_path('posts'), $imgName);
        $allposts = DB::table('_posts')->update(['img'=>$imgName, 'content'=>$newCon, 'user_id'=>$userID, 'category'=>$category]);
        return back()->with('success');
    }
}
