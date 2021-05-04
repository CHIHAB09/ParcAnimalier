<?php

namespace App\Http\Controllers;

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
        return view('animals.index', [
            'animals'=> Animal::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animals.form');
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
        return redirect()->route('animals.show', [$animal]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        //recupere l id ou renvoie une page 404 no found
        //avec la methode findOrfail()
        $animal = Animal::findOrfail($id);

        //on recupere en fonction du title et on a eu aussi la maniere firstOrfail()
        //qui nous enverra une erreur 404
        /* $animal = Animal::where('nom', 'Ricky')->firstOrfail(); */
        

        return view('animaux', [
            'animal' => $animal
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        //on recupere un post avec find()
        $animal = Post::find(15);
        
        $animal->delete();

        dd('post suprrimer!!');

    }
}
