<?php

namespace App\Http\Controllers;

use App\Models\Adds;
use App\Models\Bid;
use Illuminate\Http\Request;

class BidController extends Controller
{
    //
    public function CreateBid() {
        $Adds = Adds::all();
        return view('CreateBid', compact('Adds'));
    }

    public function StoreBid(Request $request) {
        Bid::create([
            'HargaLelang' => $request->HargaLelang
        ]);

        return redirect('/');
    }

    public function ShowBid() {
        $Bid = Bid::all();
        return view('ShowBid', compact('Bid'));
    }

    public function formUpdateBid($id){
        $Bid = Bid::findOrFail($id);   
        return view('UpdateBid', compact('Bid'));
    }

    public function UpdateBid($id, Request $request){
        Bid::findOrFail($id)->update([
            'HargaLelang' => $request->HargaLelang,
        ]);
        return redirect('/show/bid');
    }

    public function GetBid(){
        $Bid = Bid::all();

        return $Bid;
    }
}