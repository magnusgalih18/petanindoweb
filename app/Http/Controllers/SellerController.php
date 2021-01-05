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
use Illuminate\Support\Facades\Storage;

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

        $item = DB::table('items')
            ->join('sellers', 'sellers.id', '=', 'items.seller_id')
            ->where('sellers.id', '=', Auth::id())
            ->paginate(8);
        return view('seller.homeManager', compact('countData', 'countTr', 'item'));
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

    public function detailProduct($item_id)
    {
        $items = DB::table('items')
            ->where('items.id', '=', $item_id)
            ->join('sellers', 'items.seller_id', '=', 'sellers.id')
            ->select('items.*', 'sellers.username')
            ->first();

        return view('seller.detailProduk')
            ->with('items',$items);
    }

    public function updateProductView($item_id)
    {
        $Items = DB::table('items')
            ->select('items.*')
            ->where('id', '=', $item_id)
            ->first();

        return view('updateProduct')
            ->with('Flower',$Items);
    }


    public function updateProductFlower($flowers_id)
    {
//        $this->validator($request);
        $request = (object) request()->validate([
            'category_id' => 'required|numeric',
            'flowername' => 'required|unique:flowers|min:5',
            'flowerprice' => 'required|numeric|gte:50000',
            'flowerdescription' => 'required|min:20',
            'flowerimage' => 'nullable',
        ]);

//                dd($request);
        $Flowers = DB::table('flowers')
            ->select('id', 'flowerimage')
            ->where('id', $flowers_id)
            ->first();

        if(request()-> hasFile('flowerimage') === TRUE){
            Storage::disk('public')->delete($Flowers -> flowerimage);
            $image = $request -> flowerimage ->store('img', 'public');
            DB::table('flowers')
                ->where('id', $flowers_id)
                ->update([
                    'category_id' => $request -> category_id,
                    'flowername' => $request -> flowername,
                    'flowerprice' => $request -> flowerprice,
                    'flowerdescription' => $request -> flowerdescription,
                    'flowerimage' => $image,
                ]);
        }else{
            DB::table('flowers')
                ->where('id', $flowers_id)
                ->update([
                    'category_id' => $request -> category_id,
                    'flowername' => $request -> flowername,
                    'flowerprice' => $request -> flowerprice,
                    'flowerdescription' => $request -> flowerdescription,
                ]);
        }


        return redirect(Route('detailFlower', $Flowers -> id))
            ->with('status', 'Flowers Updated');
    }


}
