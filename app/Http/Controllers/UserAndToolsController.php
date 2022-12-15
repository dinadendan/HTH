<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser_and_ToolsRequest;
use App\Http\Requests\UpdateUser_and_ToolsRequest;
use App\Models\User_and_Tools;

class UserAndToolsController extends Controller
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
     * @param  \App\Http\Requests\StoreUser_and_ToolsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser_and_ToolsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User_and_Tools  $user_and_Tools
     * @return \Illuminate\Http\Response
     */
    public function show(User_and_Tools $user_and_Tools)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User_and_Tools  $user_and_Tools
     * @return \Illuminate\Http\Response
     */
    public function edit(User_and_Tools $user_and_Tools)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUser_and_ToolsRequest  $request
     * @param  \App\Models\User_and_Tools  $user_and_Tools
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser_and_ToolsRequest $request, User_and_Tools $user_and_Tools)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User_and_Tools  $user_and_Tools
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_and_Tools $user_and_Tools)
    {
        //
    }
}
