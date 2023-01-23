@extends('layouts.main');

@section('page-content')
    <div class="containner">
        <h1>Comics</h1>  
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">series</th>
                <th scope="col">sale_date</th>
                <th scope="col">type</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->Title }}</td>
                    <td>{{ $comic->Description }}</td>
                    <td>{{ $comic->Price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td><a href="{{ route('comics.show', $comics->id)}}" class="btn btn-primary">Vedi</a></td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
    </div> 
@endsection