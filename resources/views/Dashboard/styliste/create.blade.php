@extends('layouts.app')

@section('content')
<div class="container">
<h1>Creer un profil</h1>

<hr>
<form method="POST" action="{{ route('ad.store') }}">
    @csrf
    <div class="form-group">
        <label for="title">Profil</label>
        <input type="text" class="form-control {{ $errors->has('nom_entreprise') ? 'is-invalid' : '' }}"
        id="title" aria-describedby="nom_entreprise" name="nom_entreprise">
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
    <label for="price">Photo</label>
    <input type="text" class="form-control  {{ $errors->has('photo') ? 'is-invalid' : '' }}" id="" name="photo">
    @if($errors->has('photo'))
    <span class="invalid-feedback">{{ $errors->first('photo') }}</span>
    @endif
</div>
<button type="submit" class="btn btn-success">edit le profil</button>
<button type="submit" class="btn btn-success">delete le profil</button>

</form>
</div>
@endsection
