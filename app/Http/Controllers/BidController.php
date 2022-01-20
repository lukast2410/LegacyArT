<?php

namespace App\Http\Controllers;

use App\Models\Art;
use App\Models\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bid_ongoing');
    }

    public function history()
    {
        return view('bid_history');
    }

    public function revenue()
    {
        $bids = Bid::orderBy('created_at', 'desc')->paginate(20);
        $total = Bid::sum('fee');

        return view('revenue')->with(compact(['bids', 'total']));
    }

    public function transaction_history()
    {
        return view('transaction_history');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'artId' => 'required',
            'bid' => 'required|min:0',
            'agree' => 'required|accepted'
        ]);

        $amount = $request['bid'];
        $fee = $amount * 0.5 / 100.0;
        $art = Art::find($request['artId']);
        $bid = Bid::create([
            'user_id' => Auth::user()->id,
            'art_id' => $request['artId'],
            'amount' => $request['bid'],
            'fee' => $fee,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function show(Bid $bid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function edit(Bid $bid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bid $bid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bid = Bid::find($id);
        $bid->delete();

        return redirect()->back();
    }
}
