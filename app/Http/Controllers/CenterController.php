<?php

namespace App\Http\Controllers;

use App\Models\center;
use App\Http\Requests\StorecenterRequest;
use App\Http\Requests\UpdatecenterRequest;

class CenterController extends Controller
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
     * @param  \App\Http\Requests\StorecenterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecenterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\center  $center
     * @return \Illuminate\Http\Response
     */
    public function show(center $center)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\center  $center
     * @return \Illuminate\Http\Response
     */
    public function edit(center $center)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecenterRequest  $request
     * @param  \App\Models\center  $center
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecenterRequest $request, center $center)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\center  $center
     * @return \Illuminate\Http\Response
     */
    public function destroy(center $center)
    {
        //
    }
}
