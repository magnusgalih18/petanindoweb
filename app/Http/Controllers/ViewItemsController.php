<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ViewItemsController extends Controller
{
    public function getCategories(){
        $Category = DB::table('categories')
            ->get();

        return $Category;
    }
    public function viewProduct($category_id){
            $items = DB::table('items')
                ->select('items.*')
                ->where('category_id', '=', $category_id)
                ->paginate(8);
            $Categories = DB::table('categories')
                ->select('categories.*')
                ->where('id', '=', $category_id)
                ->first();
            return view('viewItems')
                ->with('items',$items)
                ->with('Categories',$Categories)
                ->with('Category', $this->getCategories());
    }

    public function detailProduct($item_id)
    {
        $items = DB::table('items')
            ->where('items.id', '=', $item_id)
            ->join('sellers', 'items.seller_id', '=', 'sellers.id')
            ->select('items.*', 'sellers.username')
            ->first();

        return view('detailItems')
            ->with('items',$items)
            ->with('Category', $this->getCategories());
    }

    public function addToCart($item_id){

        $request = (object) request()->validate([
            'quantity' => 'required|numeric|gt:0',
        ]);

        $insert = [
            'user_id' => Auth::id(),
            'items_id' => $item_id,
            'quantity' => $request -> quantity];
        Cart::create($insert);

        return redirect('/cart')->with('success', 'item added to cart');;
    }


}
