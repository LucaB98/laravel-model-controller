@extends('layouts.main')

@section('main-content')

    @foreach ($movies as $movie)
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">{{$movie['title']}}</h5>
            <h6 class="card-text">{{$movie['original_title']}}</h6>
            <small>{{$movie['nationality']}}</small>
            <div>data: {{$movie['date']}}</div>
            <div>Voto: {{$movie['vote']}}</div>
            </div>
        </div>
    @endforeach

@endsection