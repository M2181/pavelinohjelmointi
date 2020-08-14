@extends('mestari')
@section('styles')
@endsection
@section('title')
    Kauppa
    @endsection
@section('otsikko')
    Kauppa
    @endsection
@section('kontsa')
<div class="container row mx-auto">
@foreach ($products as $product)
    <div class="card" style="width: 18rem;">
    <img class="img-thumbnail" src="{{$product->kuva}}" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text">{{$product->tiedot}}</p>
        <p class="font-weight-bold">{{$product->hinta}} €</p>
        <a href="{{ url('/') }}/add/{{$product->id}}" class="btn btn-primary pull-down">Lisää koriin</a>
    </div>
    </div>
@endforeach
</div>
@endsection