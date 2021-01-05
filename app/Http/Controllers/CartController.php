<?php

namespace App\Http\Controllers;

use App\DetailTransaction;
use App\HeaderTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function getCategories(){
        $Category = DB::table('categories')
            ->get();

        return $Category;
    }
    public function cartView()
    {
        $Carts = DB::table('carts')
            ->where('user_id', '=', Auth::id())
            ->join('items', 'carts.items_id', '=', 'items.id')
            ->select('carts.*', 'items.itemsname','items.itemsimage', 'items.itemsprice')
            ->get();

        $Det_cart = DB::table('carts')
            ->where('user_id', '=', Auth::id())
            ->select('carts.*')
            ->get();
        $Total = 0;
        foreach ($Det_cart as $tr){
            $Items = DB::table('items')
                ->where('id', '=', $tr->items_id)
                ->first();
            $totalPrice = $tr -> quantity * $Items -> itemsprice;
            $tr -> {'totalPrice'} = $totalPrice;
            $tr -> {'items'} = $Items;
            $Total = $totalPrice + $Total;
        }

        return view('cart')
            ->with('Carts',$Carts)
            ->with('Trans',$Det_cart)
            ->with('Total', $Total)
            ->with('Category', $this->getCategories());;
    }

    public function updateCart($cart_id){
        $request = (object) request()->validate([
            'quantity' => 'required|numeric|gt:0',
        ]);
//        dd($request);
//        dd($cart_id);
        DB::table('carts')
            ->where('id', '=', $cart_id)
            ->update([
                'quantity' => $request -> quantity
            ]);

        return redirect('/cart');
    }

    public function deleteCartsItem($id){
        DB::table('carts')
            ->where('id', '=', $id)
            ->delete();
        return redirect('/cart')
            ->with('status', 'Items Berhasil Dihapus');
    }


    public function checkOut(){
        $data = DB::table('carts')
            -> where('user_id', '=', Auth::id())
            -> get();

        $insert = [
            'user_id'=> Auth::id()
        ];
        HeaderTransaction::create($insert);

        $transactionid = DB::table('headertransactions')
            ->latest()
            ->first();

        foreach ($data as $d){
//            dd($d);
//            $dtitem = new DetailTransaction();
//            $dtitem->transaction_id = $transactionid->id;
//            $dtitem->flower_id = $d -> flowers_id;
//            $dtitem->quantity = $d -> quantity;
//            $dtitem->save();

            $insert = [
                'transaction_id' => $transactionid->id,
                'items_id' => $d -> items_id,
                'quantity' => $d -> quantity];
            DetailTransaction::create($insert);
        }

        DB::table('carts')
            -> where('user_id', '=', Auth::id())
            -> delete();

        return redirect('/home');
    }
}
