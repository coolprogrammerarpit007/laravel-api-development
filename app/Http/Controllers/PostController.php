<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'Index Data';
    }

    public function store()
    {
        return 'data has been stored successfully!';
    }
    public function show(string $id)
    {
        return 'data fetched successfully of Id: ' . $id;
    }
}
