@extends('layouts,main');

@section('page-content')
    <div class="container">
        <a href="{{ route(comics.index) }}">Home</a>

        <h1>{{ $comics->title}}</h1>

        <p>{{ $comics->description }}</p>
    </div>
@endsection