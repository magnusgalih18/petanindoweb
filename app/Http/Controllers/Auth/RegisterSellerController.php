<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Seller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterSellerController extends Controller
{
    public function getCategories(){
        $Category = DB::table('categories')
            ->get();

        return $Category;
    }
    public function showRegisterForm(){
        return view('auth.registerSeller')
            ->with('Category', $this->getCategories());
    }

    function validator(Request $request){
        return $request->validate([
            'username' => 'required|min:5',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8',
            'password-confirm' => 'required|same:password',
            'address' => 'required',
            'agree' => 'required'
        ]);
    }

    function register(Request $request){
        $this->validator($request);

        $userSeller = new Seller();

        $userSeller['username'] = $request['username'];
        $userSeller['email'] = $request['email'];
        $userSeller['password'] = Hash::make($request['password']);
        $userSeller['role'] = 'sellers';
        $userSeller['password-confirm'] = $request['password-confirm'];
        $userSeller['gender'] = $request['gender'];
        $userSeller['dob'] = $request['dob'];
        $userSeller['address'] = $request['address'];
        $userSeller->save();

        $user = new User();

        $user['username'] = $request['username'];
        $user['email'] = $request['email'];
        $user['password'] = Hash::make($request['password']);
        $user['role'] = 'sellers';
        $user['password-confirm'] = $request['password-confirm'];
        $user['gender'] = $request['gender'];
        $user['dob'] = $request['dob'];
        $user['address'] = $request['address'];
        $user->save();

//        $request = (object) request()->validate([
//            'quantity' => 'required|numeric|gt:0',
//        ]);
//
//        $insert = [
//            'user_id' => Auth::id(),
//            'items_id' => $item_id,
//            'quantity' => $request -> quantity];
//        Seller::create($insert);

        return redirect('loginseller');
    }
}
