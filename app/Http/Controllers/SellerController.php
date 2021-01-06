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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SellerController extends Controller
{
    public function getCategories(){
        $Category = DB::table('categories')
            ->get();

        return $Category;
    }

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
            ->select('items.*')
            ->paginate(8);
//        dd($item);
        $Category = Category::all();
        return view('seller.homeManager')
            ->with('countData', $countData)
            ->with('countTr', $countTr)
            ->with('item', $item)
            ->with('Category', $Category);
//             compact('countData', 'countTr', 'item', $Category);
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

    public function detailProduct($items_id)
    {
        $item = DB::table('items')
            ->where('items.id', '=', $items_id)
            ->join('sellers', 'items.seller_id', '=', 'sellers.id')
            ->select('items.*', 'sellers.username')
            ->first();
//        dd($items_id);

        return view('seller.detailProduk')
            ->with('items',$item)
            ->with('Category', $this->getCategories());
    }

    public function updateProductView($item_id)
    {
        $Items = DB::table('items')
            ->select('items.*')
            ->where('id', '=', $item_id)
            ->first();

        return view('seller.editProduk')
            ->with('item',$Items)
            ->with('Category', $this->getCategories());
    }


    public function updateProductItem($item_id)
    {
//        $this->validator($request);
        $request = (object) request()->validate([
            'category_id' => 'required|numeric',
            'itemsname' => 'required|min:5',
            'itemsprice' => 'required|numeric|gte:0',
            'itemsdescription' => 'required|min:10',
            'itemsimage' => 'nullable',
        ]);

//                dd($request);
        $items = DB::table('items')
            ->select('id', 'itemsimage')
            ->where('id', $item_id)
            ->first();

        if(request()-> hasFile('itemsimage') === TRUE){
            Storage::disk('public')->delete($items -> itemsimage);
            $image = $request -> itemsimage ->store('img', 'public');
            DB::table('items')
                ->where('id', $item_id)
                ->update([
                    'category_id' => $request -> category_id,
                    'itemsname' => $request -> itemsname,
                    'itemsprice' => $request -> itemsprice,
                    'itemsdescription' => $request -> itemsdescription,
                    'itemsimage' => $image,
                ]);
        }else{
            DB::table('items')
                ->where('id', $item_id)
                ->update([
                    'category_id' => $request -> category_id,
                    'itemsname' => $request -> itemsname,
                    'itemsprice' => $request -> itemsprice,
                    'itemsdescription' => $request -> itemsdescription,
                ]);
        }


        return redirect(Route('detailItems', $items -> id))
            ->with('status', 'Produk Updated')
            ->with('Category', $this->getCategories());
    }

    public function addProductView(){
        $items = DB::table('items')
            ->join('sellers', 'sellers.id', '=', 'items.seller_id')
            ->where('sellers.id', '=', Auth::id())
            ->get();

        return view('seller.tambahProduk')
            ->with('item', $items)
            ->with('Category', $this->getCategories());
    }

    function validator(Request $request){
        return $request->validate([
            'category_id' => 'required|numeric',
            'itemsname' => 'required|unique:items|min:5',
            'itemsprice' => 'required|numeric|gte:0',
            'itemsdescription' => 'required|min:10',
            'itemsimage.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048',
        ]);
    }

    //addProduct
    public function addProduct(Request $request)
    {
        $this->validator($request);

        $image = $request -> itemsimage -> store('img', 'public');

        DB::table('items')
            ->insert([
                'seller_id' => Auth::id(),
                'category_id' => $request -> category_id,
                'itemsname' => $request -> itemsprice,
                'itemsprice' => $request -> itemsprice,
                'itemsdescription' => $request -> itemsdescription,
                'itemsimage' => $image,
            ]);

        return redirect('/dashboardSeller')
            ->with('status', 'Produk Berhasil Ditambahkan')
            ->with('Category', $this->getCategories());
    }

    public function deleteProduct($item_id)
    {
//        dd($item_id);
        DB::table('items')
            ->where('id', '=', $item_id)
            ->delete();

        return redirect(Route('homeManager'))
            ->with('status', 'Produk Berhasil Dihapus')
            ->with('Category', $this->getCategories());
    }

    public function displayChangePasswordForm()
    {
        return view('seller.changePassword');
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
            return redirect('/dashboardSeller')
                ->with('Category', $this->getCategories());
        }else
        {
            return redirect('/changePasswordSeller')
                ->with('Category', $this->getCategories());
        }
    }

    public function viewProduct($category_id){
        $items = DB::table('items')
            ->join('sellers', 'sellers.id', '=', 'items.seller_id')
            ->where('sellers.id', '=', Auth::id())
            ->select('items.*')
            ->where('category_id', '=', $category_id)
            ->paginate(8);
        $Categories = DB::table('categories')
            ->select('categories.*')
            ->where('id', '=', $category_id)
            ->first();
        return view('seller.indexCategory')
            ->with('item',$items)
            ->with('Categories',$Categories)
            ->with('Category', $this->getCategories());
    }
}
