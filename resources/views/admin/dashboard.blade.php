
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Tableau de Bord</h1>
        <div class="row">
            @foreach($stylistes as $styliste)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">{{ $styliste->nom_entreprise }}</div>
                        <div class="card-body">
                            <p>Contact : {{ $styliste->contact }}</p>
                            <p>Localisation : {{ $styliste->localisation }}</p>
                            <p>Photo:{{  $styliste->photo  }}</p>
<a href=""><button>Modifier un styliste</button></a>
<a href=""><button>Supprimer un styliste</button></a>

                        </div>
                    </div>
                </div>
                <!-- Ajoutez ce lien où vous souhaitez dans votre application -->
<a href="{{ route('dashboard') }}">Tableau de Bord</a>
            @endforeach
        </div>
    </div>
@endsection
