@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="bg-dark">
    
    <div class="container">
        <div class="row g-3">
        @foreach ($trains as $train)
            <div class="col-4">
                <div class="card">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Agenzia: {{$train->agency}}</p>
                        <p class="card-text">{{$train->departure_station}}</p>
                        <p class="card-text">{{$train->arrival_station}}</p>
                        <p class="card-text">Orario di Partenza: {{$train->departure_time}}</p>
                        <p class="card-text">Orario di Arrivo: {{$train->arrival_time}}</p>
                        <p class="card-text">Codice Treno: {{$train->train_code}}</p>
                        <p class="card-text">{{$train->punctual_train}}</p>
                        <p class="card-text">{{$train->deleted_train}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>

@endsection
