@extends('layouts.app')

@section('content')
<div class="container">
<h1>Creer un profil</h1>

<hr>
<form method="POST" action="/ajouter/traitement/">
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
    <select class="form-select" aria-label="Default select example" name="tuteur">
        <option value="selected">Sélectionnez un styliste</option>
        @foreach ($produit as $tuteur)
        <option value="{{ $tuteur->id }}">
            {{ $tuteur->nom }} {{ $tuteur->prenom }}
        </option>

        @endforeach
</select>
</div>
<div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" class="form-control  {{ $errors->has('photo') ? 'is-invalid' : '' }}" id="" name="photo">
    @if($errors->has('photo'))
    <span class="invalid-feedback">{{ $errors->first('photo') }}</span>
    @endif
</div>
<button type="submit" class="btn btn-success">Ajouter un styliste</button>

</form>
</div>
@endsection
