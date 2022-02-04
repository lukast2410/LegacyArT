<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TODO: Get All Ongoing bid and Total of bid history, then pass to the view

        return view('bid_ongoing');
    }

    public function history()
    {
        // TODO: Get All Bid History (include canceled bid) and Total of ongoing bid, then pass to the view

        return view('bid_history');
    }

    public function revenue()
    {
        // TODO: Get All Bids (include canceled bid) and Total Fee from all bid, then pass to the view

        return view('revenue');
    }

    public function transaction_history()
    {
        // TODO: Get All Buy History and Total of Sell History, pass to the view

        return view('transaction_history');
    }

    public function sell_history()
    {
        // TODO: Get All Sell History and Total of Buy History, pass to the view

        return view('sell_history');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: Validate data and save to database

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // TODO: Update status to Canceled and delete the selected bid

        return redirect()->back();
    }
}
