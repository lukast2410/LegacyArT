<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtController extends Controller
{
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
        // TODO: Validate data, store art image to storage, and save to database

        return redirect(route('user.profile', '@ nickname'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // TODO: Get Art Data and the latest bids, then pass to the view
        
        return view('art');
    }

    public function accept_offer(Request $request){
        // TODO: Accept Offer (Highest Bid), see details in docs

        return redirect()->back();
    }
}
