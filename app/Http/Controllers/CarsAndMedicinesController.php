<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCars_and_MedicinesRequest;
use App\Http\Requests\UpdateCars_and_MedicinesRequest;
use App\Models\Cars_and_Medicines;

class CarsAndMedicinesController extends Controller
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
     * @param  \App\Http\Requests\StoreCars_and_MedicinesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCars_and_MedicinesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cars_and_Medicines  $cars_and_Medicines
     * @return \Illuminate\Http\Response
     */
    public function show(Cars_and_Medicines $cars_and_Medicines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cars_and_Medicines  $cars_and_Medicines
     * @return \Illuminate\Http\Response
     */
    public function edit(Cars_and_Medicines $cars_and_Medicines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCars_and_MedicinesRequest  $request
     * @param  \App\Models\Cars_and_Medicines  $cars_and_Medicines
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCars_and_MedicinesRequest $request, Cars_and_Medicines $cars_and_Medicines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cars_and_Medicines  $cars_and_Medicines
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cars_and_Medicines $cars_and_Medicines)
    {
        //
    }
}
