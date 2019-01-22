<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;


class DesignController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {

    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'max' => 'required',
            'score' => 'required',
            'dice' => 'required',
        ]);

        Game::create($request->all());

        return redirect()->back();


    }





    public function create()
    {
        return view('design');
    }
}
