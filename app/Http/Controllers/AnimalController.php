<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Food;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();

        return view('animals', [
            'animals'=> $animals
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animalForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Animal::create([
            'nom' => $request->nom,
            'entrer' => $request->entrer,
            'sortie' => $request->sortie,
            'age' => $request->age,
            'sexe' => $request->sexe,
            'poids' => $request->poids,
            'actif' => $request->actif,
        ]);
        dd('animal crée');
        /* return redirect()->route('animals.show', [$id]); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $id)
    {
        
        //recupere l id ou renvoie une page 404 no found
        //avec la methode findOrfail()
       /*  $animal = Animal::findOrfail($id); */

        //on recupere en fonction du title et on a eu aussi la maniere firstOrfail()
        //qui nous enverra une erreur 404
        /* $animal = Animal::where('nom', 'Ricky')->firstOrfail(); */
        
    

        return view('animal', [
            'animal' => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $id)
    {
        return view('animals.edit', [
            'animals' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $id)
    {
        $animal->update([
            'nom' => $request->nom,
            'sexe' => $request->sexe,
            'age' => $request->age,
            'poids' => $request->poids,
            'entrer' => $request->entrer,
            'sortie' => $request->sortie,
            'actif' => $request->actif

        ]);
        return redirect()->route('animal.show', [$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $id)
    {
        //on recupere un post avec find()
        /* $animal = Animal::find(15); */
        
        $id->delete();

        /* dd('post suprrimer!!'); */
        return redirect()->route('animals.index');

    }
}
