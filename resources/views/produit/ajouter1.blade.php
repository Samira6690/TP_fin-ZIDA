@extends('layouts.app')

@section('content')
<div class="container">
<h1>Ajouter un produit</h1>

<hr>
<form method="POST" action="/ajouter1/traitement/">
    @csrf
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}"
        id="nom" aria-describedby="nom" name="nom">
        @if($errors->has('nom'))
        <span class="invalid-feedback">{{ $errors->first('nom') }}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="montant">Montant</label>
<textarea name="montant" id="montant" class="form-control  {{ $errors->has('montant') ? 'is-invalid' : '' }}" cols="30" rows="10"></textarea>
@if($errors->has('montant'))
<span class="invalid-feedback">{{ $errors->first('montant') }}</span>
@endif
  </div>
  <div class="mb-3">
<select class="form-select" aria-label="Default select example" name="styliste">
        <option value="selected">Sélectionnez un styliste</option>
        @foreach ($stylistes as $styliste)
        <option value="{{ $styliste->id }}">
            {{ $styliste->nom_entreprise }}
        </option>
        @endforeach
</select>
</div>
<button type="submit" class="btn btn-success">Ajouter un produit</button>

</form>
</div>
@endsection
