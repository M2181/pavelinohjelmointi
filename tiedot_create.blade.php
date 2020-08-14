@extends('mestari')
@section('title')
    Kauppa
    @endsection
@section('otsikko')
Tee uusi tieto
    @endsection
@section('kontsa')
<div class="container w-25 p-3">
    <form method="POST" action="../public/check">

      {{ csrf_field() }}
  <div class="form-group">
    <label>nimi</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label>phnum</label>
    <input type="number" class="form-control" name="phnum">
  </div>
  <div class="form-group">
    <label>osoite</label>
    <input type="text" class="form-control" name="osoite">
  </div>
  <div class="form-group">
    <label>etunimi</label>
    <input type="text" class="form-control" name="etunimi">
  </div>
  <div class="form-group">
    <label>sukunimi</label>
    <input type="text" class="form-control" name="sukunimi">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
@endsection