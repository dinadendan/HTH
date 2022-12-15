<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedicines_toolsRequest;
use App\Http\Requests\UpdateMedicines_toolsRequest;
use App\Models\Medicines_tools;

class MedicinesToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $medicines_tools = Medicines_tools::get();
        return response() -> json($medicines_tools );
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
     * @param  \App\Http\Requests\StoreMedicines_toolsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicines_toolsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicines_tools  $medicines_tools
     * @return \Illuminate\Http\Response
     */
    public function show(Medicines_tools $medicines_tools)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicines_tools  $medicines_tools
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicines_tools $medicines_tools)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicines_toolsRequest  $request
     * @param  \App\Models\Medicines_tools  $medicines_tools
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicines_toolsRequest $request, Medicines_tools $medicines_tools)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicines_tools  $medicines_tools
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicines_tools $medicines_tools)
    {
        //
    }
}
