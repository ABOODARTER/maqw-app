<?php

namespace App\Http\Controllers;

use App\Models\ads;
use App\Http\Requests\StoreadsRequest;
use App\Http\Requests\UpdateadsRequest;

class AdsController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreadsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreadsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function show(ads $ads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit(ads $ads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateadsRequest  $request
     * @param  \App\Models\ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateadsRequest $request, ads $ads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy(ads $ads)
    {
        //
    }
}
