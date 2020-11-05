@extends('layouts.main')

@section('page-title')
Gli Autori
@endsection

@section('page-content')

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Cognome</th>
        <th scope="col">Data</th>
        <th scope="col">Modifica</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($authors as $author)
        <tr>
            <th scope="row">1</th>
            <td>{{$author->id}}</td>
            <td>{{$author->name}}</td>
            <td>{{$author->lastname}}</td>
            <td>{{$author->date_of_birth}}</td>
            <td><a href="{{route("authors.create", $author->id)}}" class="btn btn-primary">Modifica</a></td>
        </tr>
        @endforeach
@endsection