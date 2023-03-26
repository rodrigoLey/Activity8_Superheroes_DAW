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
        $datos['superheroes']=superheroes::paginate(10);
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

        response()->json($datosSuperheroe);
        return redirect('/superheroe')->with('mensaje','Superheroe Agregado con exito.');
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
    public function edit($id)
    {
        $superheroe=superheroes::findOrFail($id);

        return view('superheroe.edit', compact('superheroe'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosSuperheroe = request()->except(['_token','_method']);
        if($request->hasFile('Foto')){
            $superheroe=superheroes::findOrFail($id);
            Storage::delete('public/'.$superheroe->Foto);
            $datosSuperheroe['Foto']=$request->file('Foto')->store('upload','public');
        }

        
        superheroes::where('id','=',$id)->update($datosSuperheroe);
        $superheroe=superheroes::findOrFail($id);
        view('superheroe.edit', compact('superheroe'));
        return redirect('/superheroe');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $superheroe=superheroes::findOrFail($id);

        if(Storage::delete('public/'.$superheroe->Foto)){

            superheroes::destroy($id);
        }

        
        return redirect('superheroe')->with('mensaje','Superheroe Borrado con exito.');
    }
}
