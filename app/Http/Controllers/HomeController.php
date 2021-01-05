<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(){
        $Category = Category::all();

        $Sayur = DB::table('items')
            ->select('items.*')
            ->where('category_id', '=', 1)
            ->take(3)
            ->get();

        $Buah = DB::table('items')
            ->select('items.*')
            ->where('category_id', '=', 2)
            ->get();

        $Daging = DB::table('items')
            ->select('items.*')
            ->where('category_id', '=', 3)
            ->get();

        $Sembako = DB::table('items')
            ->select('items.*')
            ->where('category_id', '=', 4)
            ->take(3)
            ->get();

        return view('index')
            ->with('Sayur',$Sayur)
            ->with('Buah',$Buah)
            ->with('Daging',$Daging)
            ->with('Sembako',$Sembako)
            ->with('Category',$Category);
    }

   public function searchItem(Request $searching)
   {
        $Sayur = Item::where('itemsname','like','%'.$searching->search.'%')->get();
        $Category = Category::all();

       return view('searchItem')
           ->with('Sayur',$Sayur)
           ->with('Category', $Category);
   }

    public function getCategories(){
        $Category = DB::table('categories')
            ->get();

        return $Category;
    }

    public function displayChangePasswordForm()
    {
        return view('auth.changepassword')
            ->with('Category', $this->getCategories());
    }

    public function changeOldPassword(Request $request)
    {
        $user = Auth::user();

        if(Hash::check($request->password,$user->password))
        {
            $currentUser = User::find(Auth::id());
            $newPassword = Hash::make($request->new_password);
            $currentUser->password = $newPassword;
            $currentUser->save();
            return redirect('/');
        }else
        {
            return redirect('/changePassword')
                ->with('Category', $this->getCategories());
        }
    }

    public function aboutUs(){
        return view('aboutUs')
            ->with('Category', $this->getCategories());
    }


    public function indexSeller(){
        $Category = Category::all();

        $Sayur = DB::table('items')
            ->select('items.*')
            ->where('category_id', '=', 1)
            ->take(3)
            ->get();

        $Buah = DB::table('items')
            ->select('items.*')
            ->where('category_id', '=', 2)
            ->get();

        $Daging = DB::table('items')
            ->select('items.*')
            ->where('category_id', '=', 3)
            ->get();

        $Sembako = DB::table('items')
            ->select('items.*')
            ->where('category_id', '=', 4)
            ->take(3)
            ->get();

        return view('seller.layoutSeller')
            ->with('Sayur',$Sayur)
            ->with('Buah',$Buah)
            ->with('Daging',$Daging)
            ->with('Sembako',$Sembako)
            ->with('Category',$Category);
    }

}
