<?php

namespace App\Http\Controllers;

use App\Models\superheroes;
use Illuminate\Http\Request;
use App\Http\Controllers\SuperheroesController;
use producto\resources\views\superheroe;

class SuperheroesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('superheroe.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superheroe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosSuperheroe = request()->except('_token');

        if($request->hasFile('Foto')){
            $datosSuperheroe['Foto']=$request->file('Foto')->store('upload','public');

        }

        superheroes::insert($datosSuperheroe);

        return response()->json($datosSuperheroe);
    }

    /**
     * Display the specified resource.
     */
    public function show(superheroes $superheroes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(superheroes $superheroes)
    {
        return view('superheroe.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, superheroes $superheroes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(superheroes $superheroes)
    {
        //
    }
}
