<?php

namespace App\Http\Controllers;

use App\Category;
use App\Flower;
use App\Item;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SellerController extends Controller
{
    public function getHome()
    {
        $countData = DB::table('items')
            ->where('seller_id', '=', Auth::id())
            ->count();

        $countTr = DB::table('detailtransactions')
            ->join('items', 'items.id', '=', 'detailtransactions.items_id')
            ->join('sellers', 'sellers.id', '=', 'items.seller_id')
            ->count();
        return view('seller.homeManager', compact('countData', 'countTr'));
    }

    public function searchItem(Request $searching)
    {
        $Sayur = DB::table('items')
            ->join('sellers', 'sellers.id', '=', 'items.seller_id')
            ->where('sellers.id', '=', Auth::id())
            ->where('itemsname','like','%'.$searching->search.'%')->get();
        $Category = Category::all();

        return view('seller.searchManager')
            ->with('Sayur',$Sayur)
            ->with('Category', $Category);
    }

}
