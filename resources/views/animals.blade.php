<!-- appel du layout-->
@extends('layout.app')

@section('content')
    <h1>Liste des animaux</h1>

        @if($animals->count() > 0)
            @foreach($animals as $animal)
                <h3><a href="{{ route('animal.show', ['id' => $animal->id]) }}">{{ $animal->nom }}</a></h3>
            @endforeach
        @else

            <span>Il n'y a pas encore d'animaux dans la db...</span>
        @endif
        
@endsection