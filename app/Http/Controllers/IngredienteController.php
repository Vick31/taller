<?php

namespace App\Http\Controllers;

use App\Models\ingrediente;
use Illuminate\Http\Request;

class IngredienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingrediente_list = ingrediente::all();
        return response ([
            'ingrediente' => $ingrediente_list->shuffle()
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ingrediente  $ingrediente
     * @return \Illuminate\Http\Response
     */
    public function show(ingrediente $ingrediente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ingrediente  $ingrediente
     * @return \Illuminate\Http\Response
     */
    public function edit(ingrediente $ingrediente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ingrediente  $ingrediente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ingrediente $ingrediente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ingrediente  $ingrediente
     * @return \Illuminate\Http\Response
     */
    public function destroy(ingrediente $ingrediente)
    {
        //
    }
}
