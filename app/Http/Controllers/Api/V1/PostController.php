<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ['data' => 'Get all indexed data'];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return [
            'msg' => 'data has been created successfully!'
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'data of Id: ' . $id . ' has been fetched successfully!';
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
        return 'data of Id: ' . $id . ' has been updated successfully! ';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'data of Id: ' . $id . ' has been deleted finally!';
    }
}
