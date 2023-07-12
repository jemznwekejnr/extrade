<?php

namespace App\Http\Controllers;

use App\Models\p2p;
use Illuminate\Http\Request;

class P2PController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('p2p.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buy()
    {
        //
        return view('p2p.buy');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sell()
    {
        //
        return view('p2p.sell');
    }

    public function makepayment()
    {
        //
        return view('p2p.makepayment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function notifypayment()
    {
        //
        return view('p2p.notifypayment');
    }

    public function confirmpayment()
    {
        //
        return view('p2p.confirmpayment');
    }

    public function rateseller()
    {
        //
        return view('p2p.rateseller');
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
     * @param  \App\Models\p2p  $p2p
     * @return \Illuminate\Http\Response
     */
    public function show(p2p $p2p)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\p2p  $p2p
     * @return \Illuminate\Http\Response
     */
    public function edit(p2p $p2p)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\p2p  $p2p
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, p2p $p2p)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\p2p  $p2p
     * @return \Illuminate\Http\Response
     */
    public function destroy(p2p $p2p)
    {
        //
    }
}
