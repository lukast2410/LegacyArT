<?php

namespace App\Http\Controllers;

use App\Models\Art;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_art');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $art = Art::find($id);
        $bids = $art->bids()->orderBy('amount', 'desc')->get();
        
        return view('art')->with(compact(['art', 'bids']));
    }

    public function accept_offer(Request $request){
        $id = $request['id'];

        $art = Art::find($id);
        $bids = $art->bids()->orderBy('amount', 'desc')->get();

        $bids[0]->status = 'accepted';
        $bids[0]->save();
        for($i=1; $i<$bids->count() ; $i++) { 
            $bids[$i]->status = 'rejected';
            $bids[$i]->save();
        }

        $art->owner_id = $bids[0]->user_id;
        $art->sold_price = $bids[0]->amount;
        $art->save();

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function edit(Art $art)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Art $art)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function destroy(Art $art)
    {
        //
    }
}
