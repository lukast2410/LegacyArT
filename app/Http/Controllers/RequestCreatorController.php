<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestCreatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TODO: Get Request data and pass to the view

        return view('view_request');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // TODO: Validate user permission

        return view('request');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: Validate data, store banner image, and save to the database

        return redirect(route('user.profile', '@ nickname'));
    }

    public function accept($id)
    {
        // TODO: Update request status to Accepted, save creator data, update user role to creator

        return redirect()->back();
    }

    public function reject($id)
    {
        // TODO: Update request status to Rejected

        return redirect()->back();
    }
}
