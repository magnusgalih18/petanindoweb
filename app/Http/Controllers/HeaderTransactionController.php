<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HeaderTransactionController extends Controller
{
    public function getCategories(){
        $Category = DB::table('categories')
            ->get();

        return $Category;
    }
    public function transHistoryView()
    {
        $Trans = DB::table('headertransactions')
            ->where('user_id', '=', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('transactionHistory')
            ->with('Trans',$Trans)
            ->with('Category', $this->getCategories());
    }
    public function transDetailView($transaction_id)
    {
        $Head = DB::table('headertransactions')
            ->where('id', '=', $transaction_id)
            ->first();

        $Trans = DB::table('detailtransactions')
            ->where('transaction_id', '=', $transaction_id)
            ->get();

        $Total = 0;
        foreach ($Trans as $tr){
            $Items = DB::table('items')
                ->where('id', '=', $tr->items_id)
                ->first();
            $totalPrice = $tr -> quantity * $Items -> itemsprice;
            $tr -> {'totalPrice'} = $totalPrice;
            $tr -> {'items'} = $Items;
            $Total = $totalPrice + $Total;
        }
//        dd($Trans);

        return view('transactionDetail')
            ->with('Head', $Head)
            ->with('Trans',$Trans)
            ->with('Total', $Total)
            ->with('Category', $this->getCategories());

    }

}
