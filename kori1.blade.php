@extends('mestari')
@section('title')
    Kauppa
    @endsection
@section('otsikko')
Tee uusi tieto
    @endsection
@section('kontsa')
@foreach ($kori as $konn)
    <div class="card" style="width: 18rem;">
    <img class="img-thumbnail" src="{{$konn->kuva}}" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$konn->name}}</h5>
        <p class="card-text"></p>
        <p class="font-weight-bold">{{$konn->user_id}} €</p>
        <p class="font-weight-bold">qua {{$konn->quantity}} €</p>
        <p class="font-weight-bold"> €</p>

    </div>
    </div>
@endforeach
@endsection