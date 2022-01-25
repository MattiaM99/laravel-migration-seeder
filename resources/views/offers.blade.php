@extends('layouts.main')
@section('content')
<div class="container py-3">
  <h2>Travel Offers</h2>
    <div class="row">
      @foreach ($offers as $offer)
        <div class="col-sm-4">
          <div class="card my-2">
            <div class="card-body">
              <h3 class="card-title">{{$offer->where}}</h3>
              <h3 class="card-title">{{$offer->when}}</h3>
              <p class="card-text">Questo pacchetto dura <strong>{{$offer->duration}}</strong> giorni, ti offre un'esperienza di tipo <strong>{{$offer->type}}</strong> al prezzo di <strong>€{{$offer->price}}</strong>.</p>
              <a href="#" class="btn btn-primary">Acquista ora</a>
            </div>
          </div>
        </div>
      @endforeach
  <a href="{{route('home')}}" class="btn btn-primary ml-auto my-3">Torna alla home</a>

</div>
@endsection 