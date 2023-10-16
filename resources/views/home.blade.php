@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">
    <h1 class="my-5">Lista Treni</h1>
    <div class="row g-3">
      @if(isset($trains))
      @foreach ($trains as $train)
      <div class="col-3">
        <div class="card h-100" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Azienda: {{ $train->azienda }}</h5>
            <h6 class="card-text">Cod. Treno: {{ $train->train_code }}</h6>
            <p class="card-text mb-2">Stazione di partenza: {{ $train->departure_station }}</p>
            <p class="card-text">Stazione d'arrivo: {{ $train->arrival_station }}</p>
            <p class="card-text">Orario di partenza: {{ $train->departure_time }}</p>
            <p class="card-text">Orario d'arrivo: {{ $train->arrival_time }}</p>
          </div>
        </div>
      </div>
      @endforeach
      @endif        
  
    </div>
  </section>
@endsection
