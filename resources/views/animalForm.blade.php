@extends('layout.app')
@section('content')
    <h1>Ajouter un nouvelle animal</h1>

    <form method="POST" action="{{ route('animals.store')}}">
    {{-- csrf c est une securite fournie par laravel pour eviter une injection non voulu --}}
    @csrf
        <label for="nom">Nom de l'animal:</label>
            <input type="text" name="nom" class="border-gray-600 border-2" id="nom"><br>
        <label for="Date d'arriver">Date d'arriver:</label>
            <input type="date" name="entrer" class="border-gray-600 border-2" id="Date d'arriver"><br>
        <label for="Date de sortie">Date de sortie:</label>
            <input type="date" name="sortie" class="border-gray-600 border-2" id="Date de sortie"><br>  
        <label for="Age">Age:</label> 
            <input type="date" name="age" class="border-gray-600 border-2" id="Age"><br> 
        <label for="sexe">sexe:</label>   
            <input type="text" name="sexe" class="border-gray-600 border-2" id="Sexe"><br>
        <label for="poids">poids:</label>
            <input type="number" name="poids" class="border-gray-600 border-2" id="Poids"> kg<br>
        <label>Autorisation de sortie:
            <input type="radio" id="0" name="actif"class="border-gray-600 border-2" value="0">
                <label for="0">0</label>
        <input type="radio" id="1" name="actif" class="border-gray-600 border-2" value="1">
                <label for="1">1</label>
            </label><br>
    @foreach(App\Models\Food::all() as $item)
        <label for="food">{{ $item->nom }}:</label>
            <input type="checkbox" id="food" name="food_id"class="border-gray-600 border-2"><br>
        @endforeach
        <button type="submit" class="bg-green-500">Créer</button>
    </form>

    <a href="{{ route('animals.index') }}">Go back</a>
@endsection