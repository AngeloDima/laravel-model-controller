@extends('layouts.app')

@section('title')
    Laravel model
@endsection

@section('body')
    @foreach ($movies as $movie)
        <div>
            <h2>{{ $movie['title'] }}</h2>
            <p>{{ $movie['vote'] }}</p>
        </div>
    @endforeach
@endsection
