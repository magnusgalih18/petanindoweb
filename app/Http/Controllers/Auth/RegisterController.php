<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function getCategories(){
        $Category = DB::table('categories')
            ->get();

        return $Category;
    }
    public function showRegisterForm(){
        return view('auth.register')
            ->with('Category', $this->getCategories());
    }

    function validator(Request $request){
        return $request->validate([
            'username' => 'required|min:5',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8',
            'password-confirm' => 'required|same:password',
            'gender' => 'required|not_in:0',
            'dob' => 'required|date',
            'address' => 'required',
        ]);
    }

    function register(Request $request){
        $this->validator($request);

        $user = new User();

        $user['username'] = $request['username'];
        $user['email'] = $request['email'];
        $user['password'] = Hash::make($request['password']);
        $user['role'] = 'users';
        $user['password-confirm'] = $request['password-confirm'];
        $user['gender'] = $request['gender'];
        $user['dob'] = $request['dob'];
        $user['address'] = $request['address'];
        $user->save();

        return redirect('login');
    }
}
