<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;use Cookie;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function getCategories(){
        $Category = DB::table('categories')
            ->get();

        return $Category;
    }
    public function showLoginForm(){
        return view('auth.login')
            ->with('Category', $this->getCategories());
    }

    function validator(Request $request){
        return $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    }

    function login(Request $request){
        $credentials = $request->only(['email', 'password']);
        $remember_me = $request->get('remember');
        if(Auth::attempt($credentials, $remember_me)){
            $ckname = Auth::getRecallerName();
            Cookie::queue($ckname, Cookie::get($ckname), 10080);
            return redirect('home');
        } else{
            return redirect()->back();
        }
    }

    function logout(){
        $user = Auth::user();
        $user->remember_token = null;
        $user->save();
        Auth::logout();
        return redirect('login');
    }
}
