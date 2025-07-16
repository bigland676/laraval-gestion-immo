<?php

namespace App\Http\Controllers;

use App\Models\Servicy;
use Illuminate\Http\Request;

class ServicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.services.index');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicy $servicy)
    {
        return view('pages.services.show', compact('servicy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servicy $servicy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servicy $servicy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicy $servicy)
    {
        //
    }
}
