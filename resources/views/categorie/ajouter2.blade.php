@extends('layouts.app')

@section('content')
<div class="container">
<h1>Ajouter une collection</h1>

<hr>
<form method="POST" action="/ajouter2/traitement/">
    @csrf
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}"
        id="nom" aria-describedby="nom" name="nom">
        @if($errors->has('nom'))
        <span class="invalid-feedback">{{ $errors->first('nom') }}</span>
        @endif
    </div>
</select>
</div>
<button type="submit" class="btn btn-success">Ajouter une collection</button>

</form>
</div>
@endsection
