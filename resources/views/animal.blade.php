@extends('layout.app')

@section('content')
    <h1>{{ $id->nom }}</h1>

<hr>

@forelse ($id->foods as $food )
    <div>
        <h3>Aliment :{{ $food->nom }}</h3>
        <h3>Nombre de repas :{{ $food->nombre_repas }}</h3>
    </div>
    @forelse ($id->soins as $soin )
    <div>
    <p>Arriver le: {{ \Carbon\Carbon::parse($soin->arriver)->format('d/m/Y') }} dans nos locaux.</p>
    </div>
@empty
    <span>Nous n'avons rien sur cette animal <span>
@endforelse
<hr>
@empty
    <span>Aucun soin n'est enregister pour cette animal...</span>
@endforelse




@endsection

