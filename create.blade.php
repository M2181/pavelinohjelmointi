@extends('mestari')
@section('title')
    Kauppa
    @endsection
@section('otsikko')
Tee uusi tuote
    @endsection
@section('kontsa')
<div class="container w-25 p-3">
    <form method="POST" action="../public/create">

      {{ csrf_field() }}
  <div class="form-group">
    <label>Tuotteen nimi</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label>Kategoria</label>
    <input type="text" class="form-control" name="kategoria">
  </div>
  <div class="form-group">
    <label>Kuvan osoite</label>
    <input type="text" class="form-control" name="kuva">
  </div>
  <div class="form-group">
    <label>Hinta</label>
    <input type="number" class="form-control" name="hinta">
  </div>
  <div class="form-group">
    <label>Tuotteen tiedot</label>
    <input type="text" class="form-control" name="tiedot">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
@endsection