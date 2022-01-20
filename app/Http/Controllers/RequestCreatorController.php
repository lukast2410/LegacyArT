<?php

namespace App\Http\Controllers;

use App\Models\RequestCreator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestCreatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('view_request');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $request->validate([
            'reason' => ['required', 'string', 'min:20'],
            'bio' => ['required', 'string', 'min:10'],
            'banner' => ['required', 'image', 'file', 'max:5120'],
        ]);

        $banner_image = $request['banner']->store('banner');
        RequestCreator::create([
            'user_id' => Auth::user()->id,
            'banner_image' => $banner_image,
            'bio' => $request['bio'],
            'reason' => $request['reason']
        ]);

        return redirect(route('user.profile', '@' . Auth::user()->nickname));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
