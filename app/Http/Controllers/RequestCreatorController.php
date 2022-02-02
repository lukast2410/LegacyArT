<?php

namespace App\Http\Controllers;

use App\Models\Creator;
use App\Models\RequestCreator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class RequestCreatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows('admin')){
            $requests = RequestCreator::orderBy('created_at', 'desc')->paginate(20);
        }else{
            $requests = RequestCreator::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(20);
        }

        return view('view_request')->with(compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::denies('can-request')) return redirect(route('view.requests'));
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
            'reason' => ['required', 'string'],
            'bio' => ['required', 'string'],
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

    public function accept($id)
    {
        $req = RequestCreator::find($id);
        $req->status = 'Accepted';
        $req->save();
        
        $creator = Creator::create([
            'user_id' => $req->user_id,
            'banner_image' => $req->banner_image,
            'bio' => $req->bio
        ]);
        
        $user = User::find($req->user_id);
        $user->role_id = 2;
        $user->save();

        return redirect()->back();
    }

    public function reject($id)
    {
        $req = RequestCreator::find($id);
        $req->status = 'Rejected';
        $req->save();

        return redirect()->back();
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
