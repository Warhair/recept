<?php

namespace App\Http\Controllers;

use App\Models\receptek;
use Illuminate\Http\Request;

class ReceptekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    
    public function show()
    {
        $receptek = receptek::all();
        return $receptek;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\receptek  $receptek
     * @return \Illuminate\Http\Response
     */
    public function edit(receptek $receptek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\receptek  $receptek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, receptek $receptek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\receptek  $receptek
     * @return \Illuminate\Http\Response
     */
    public function destroy(receptek $receptek)
    {
        //
    }
}
