<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCatFactRequest;
use App\Http\Requests\UpdateCatFactRequest;
use App\Models\CatFact;

class CatFactController extends Controller
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
     * @param  \App\Http\Requests\StoreCatFactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCatFactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatFact  $catFact
     * @return \Illuminate\Http\Response
     */
    public function show(CatFact $catFact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatFact  $catFact
     * @return \Illuminate\Http\Response
     */
    public function edit(CatFact $catFact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCatFactRequest  $request
     * @param  \App\Models\CatFact  $catFact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCatFactRequest $request, CatFact $catFact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatFact  $catFact
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatFact $catFact)
    {
        //
    }
}
