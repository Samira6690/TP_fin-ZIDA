@extends('layouts.app')

@section('content')
<div class="container">
<h1>Modifier un styliste</h1>
<hr>
<form method="POST" action="{{ route('/update/traitement') }}">
    @csrf
    <div class="form-group">
        <label for="nom_entreprise">Modifier un styliste</label>
        <input type="text" class="form-control {{ $errors->has('nom_entreprise') ? 'is-invalid' : '' }}"
        id="nom_entreprise" aria-describedby="nom_entreprise" name="nom_entreprise">
        @if($errors->has('nom_entreprise'))
        <span class="invalid-feedback">{{ $errors->first('nom_entreprise') }}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="contact">Contact</label>
<textarea name="contact" id="contact" class="form-control  {{ $errors->has('contact') ? 'is-invalid' : '' }}" cols="30" rows="10"></textarea>
@if($errors->has('contact'))
<span class="invalid-feedback">{{ $errors->first('contact') }}</span>
@endif
  </div>
  <div class="form-group">
    <label for="localisation">Localisation</label>
    <input type="text" class="form-control  {{ $errors->has('localisation') ? 'is-invalid' : '' }}" id="localisation" name="localisation">
    @if($errors->has('localisation'))
    <span class="invalid-feedback">{{ $errors->first('localisation') }}</span>
    @endif
</div>
<div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" class="form-control  {{ $errors->has('photo') ? 'is-invalid' : '' }}" id="" name="photo">
    @if($errors->has('photo'))
    <span class="invalid-feedback">{{ $errors->first('photo') }}</span>
    @endif
</div>
<button type="submit" class="btn btn-success">Modifier un styliste</button>
</form>
</div>
@endsection
