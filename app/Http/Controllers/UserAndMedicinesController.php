<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser_and_MedicinesRequest;
use App\Http\Requests\UpdateUser_and_MedicinesRequest;
use App\Models\User_and_Medicines;

class UserAndMedicinesController extends Controller
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
     * @param  \App\Http\Requests\StoreUser_and_MedicinesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser_and_MedicinesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User_and_Medicines  $user_and_Medicines
     * @return \Illuminate\Http\Response
     */
    public function show(User_and_Medicines $user_and_Medicines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User_and_Medicines  $user_and_Medicines
     * @return \Illuminate\Http\Response
     */
    public function edit(User_and_Medicines $user_and_Medicines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUser_and_MedicinesRequest  $request
     * @param  \App\Models\User_and_Medicines  $user_and_Medicines
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser_and_MedicinesRequest $request, User_and_Medicines $user_and_Medicines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User_and_Medicines  $user_and_Medicines
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_and_Medicines $user_and_Medicines)
    {
        //
    }
}
