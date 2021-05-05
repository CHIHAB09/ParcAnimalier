@extends('layout.app')

@section('content')
    <h1>{{ $animal->content }}</h1>

<hr>

<!-- petite technique au cas ou le tableau est vide on passe direct a l etape suivante -->
@forelse ($animal->soins as $soin )
    <div> <h2>{{ $animal->nom }}</h2><p>Arriver le {{ \Carbon\Carbon::parse($soin->arriver)->format('d/m/Y') }} dans nos locaux.</p>
    <h3>{{ $animal->food_id }}</h3></div>
@empty
    <span>Aucun soin n'est enregister pour cette animal...</span>
@endforelse

@endsection

