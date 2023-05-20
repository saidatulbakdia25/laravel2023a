<?php

namespace App\Http\Controllers;

use App\Models\novels;
use App\Http\Requests\StorenovelsRequest;
use App\Http\Requests\UpdatenovelsRequest;

class NovelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorenovelsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(novels $novels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(novels $novels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenovelsRequest $request, novels $novels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(novels $novels)
    {
        //
    }
}
