@extends('mestari')
@section('title')
    Kauppa
    @endsection
@section('otsikko')
    Omat Tiedot
    @endsection
@section('kontsa')
<form method="POST" action="{{ url('/') }}/edit/{{$tieto->id}}">
    @method('DELETE')
    @csrf

</form>
<div class="container w-25 p-3">
    <form method="POST" action="{{ url('/') }}/check/{{$tieto->id}}">
        {{ method_field('PATCH') }}
      {{ csrf_field() }}
  <div class="form-group">
    <label>Tuotteen nimi</label>
    <input type="text" class="form-control" name="name" value="{{$tieto->name}}">
  </div>
  <div class="form-group">
    <label>phnum</label>
    <input type="text" class="form-control" name="phnum"
           value="{{$tieto->phnum}}">
  </div>
  <div class="form-group">
    <label>osoite</label>
    <input type="text" class="form-control" name="osoite"
           value="{{$tieto->osoite}}">
  </div>
  <div class="form-group">
    <label>etunimi</label>
    <input type="text" class="form-control" name="etunimi"
           value="{{$tieto->etunimi}}">
  </div>
  <div class="form-group">
    <label>sukunimi</label>
    <input type="text" class="form-control" name="sukunimi"
           value="{{$tieto->sukunimi}}">
  </div>
  <button type="submit" class="btn btn-primary">Muokkaa tietoja</button>
</form>
    </div>
@endsection