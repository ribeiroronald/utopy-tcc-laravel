<?php

namespace App\Http\Controllers;

use App\Models\GenreGame;
use App\Http\Requests\StoreGenreGameRequest;
use App\Http\Requests\UpdateGenreGameRequest;

class GenreGameController extends Controller
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
     * @param  \App\Http\Requests\StoreGenreGameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGenreGameRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GenreGame  $genreGame
     * @return \Illuminate\Http\Response
     */
    public function show(GenreGame $genreGame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GenreGame  $genreGame
     * @return \Illuminate\Http\Response
     */
    public function edit(GenreGame $genreGame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGenreGameRequest  $request
     * @param  \App\Models\GenreGame  $genreGame
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGenreGameRequest $request, GenreGame $genreGame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GenreGame  $genreGame
     * @return \Illuminate\Http\Response
     */
    public function destroy(GenreGame $genreGame)
    {
        //
    }
}
