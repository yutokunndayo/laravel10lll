<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\ArticlesResource;

use App\Models\Article;

class ArticlesAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $articles=Article::all();
         return ArticlesResource::collection($articles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
