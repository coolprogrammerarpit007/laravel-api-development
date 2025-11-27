<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "get Index data successfully!";
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
    public function store(Request $request)
    {
        return "data created successfully!";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "data has been fetched successfully! of Story Id:  " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "data updated successfully of Id: " . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "data deleted of Id: " . $id;
    }
}
