<?php

namespace App\Http\Controllers;

use App\Models\Art;
use App\Models\Creator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creators = Creator::inRandomOrder()->limit(4)->get();
        $arts = Art::whereNull('owner_id')->inRandomOrder()->limit(24)->get();
        $newest = Art::whereNull('owner_id')->inRandomOrder()->first();
        $currentBid = $newest->bids()->orderBy('amount', 'desc')->first();

        return view('home')->with(compact(['creators', 'arts', 'newest', 'currentBid']));
    }
}
