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
        $bids = Bid::where('user_id', Auth::user()->id)->where('status', 'ongoing')->orderByDesc('created_at')->paginate(20);
        $history = Bid::where('user_id', Auth::user()->id)->where('status', '!=', 'ongoing')->withTrashed()->count();

        return view('bid_ongoing')->with(compact(['bids', 'history']));
    }

    public function history()
    {
        $bids = Bid::withTrashed()->where('user_id', Auth::user()->id)->where('status', '!=', 'ongoing')->orderByDesc('created_at')->paginate(20);
        $ongoing = Bid::where('user_id', Auth::user()->id)->where('status', 'ongoing')->count();

        return view('bid_history')->with(compact(['bids', 'ongoing']));
    }

    public function revenue()
    {
        $bids = Bid::orderBy('created_at', 'desc')->paginate(20);
        $total = Bid::sum('fee');

        return view('revenue')->with(compact(['bids', 'total']));
    }

    public function transaction_history()
    {
        $transactions = Bid::where('user_id', Auth::user()->id)->where('status', 'accepted')->orderByDesc('created_at')->paginate(20);

        return view('transaction_history')->with(compact(['transactions']));
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
        $bid->status = 'canceled';
        $bid->save();
        $bid->delete();

        return redirect()->back();
    }
}
