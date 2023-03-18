<?php

namespace App\Http\Controllers;

use App\Models\superheroes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\SuperheroesController;
use Illuminate\Support\Facades\Storage;

class SuperheroesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['superheroes']=superheroes::paginate(5);
        return view('superheroe.index',$datos);
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
    public function destroy($id)
    {
        //
        superheroes::destroy($id);
        return redirect('superheroe');
    }
}
