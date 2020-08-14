@extends('mestari')
@section('title')
    Kauppa
    @endsection
@section('otsikko')
Ostoskori
    @endsection
@section('kontsa')
<div class="container row mx-auto">
@foreach ($kori as $konn)
    <div class="card" style="width: 18rem;">
    <img class="img-thumbnail" src="{{$konn->kuva}}" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$konn->name}}</h5>
        <p class="card-text"></p>
        <p class="font-weight-bold">{{$konn->hinta}} €</p>
        <p class="font-weight-bold">määrä {{$konn->quantity}} </p>
        <p class="font-weight-bold">hinta {{$konn->ykstotal}} €</p>

    </div>
    </div>
@endforeach
@endsection