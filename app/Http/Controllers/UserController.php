<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  string  $nickname
     * @return \Illuminate\Http\Response
     */
    public function show($nickname)
    {
        // TODO: Get User data from nickname and pass to the view

        return view('profile');
    }
}
