@extends('mestari')
@section('title')
    Kauppa
    @endsection
@section('otsikko')
    @endsection
@section('kontsa')
<form method="POST" action="{{ url('/') }}/edit/{{$product->id}}">
    @method('DELETE')
    @csrf
<div class="container row mx-auto">
    <div class="card" style="width: 18rem;">
    <img class="img-thumbnail" src="{{$product->kuva}}" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text">{{$product->tiedot}}</p>
        <p class="font-weight-bold">{{$product->hinta}} €</p>
  <button type="submit" class="btn btn-danger">Poista tuote</button>
    </div>
    </div>

</form>
<div class="container w-25 p-3">
    <form method="POST" action="{{ url('/') }}/edit/{{$product->id}}">
        {{ method_field('PATCH') }}
      {{ csrf_field() }}
  <div class="form-group">
    <label>Tuotteen nimi</label>
    <input type="text" class="form-control" name="name" value="{{$product->name}}">
  </div>
  <div class="form-group">
    <label>Kategoria</label>
    <input type="text" class="form-control" name="kategoria"
           value="{{$product->kategoria}}">
  </div>
  <div class="form-group">
    <label>Kuvan osoite</label>
    <input type="text" class="form-control" name="kuva"
           value="{{$product->kuva}}">
  </div>
  <div class="form-group">
    <label>Hinta</label>
    <input type="number" class="form-control" name="hinta"
           value="{{$product->hinta}}">
  </div>
  <div class="form-group">
    <label>Tuotteen tiedot</label>
    <input type="text" class="form-control" name="tiedot"
           value="{{$product->tiedot}}">
  </div>
  <button type="submit" class="btn btn-primary">Muokkaa tietoja</button>
</form>
    </div>
    </div>
@endsection