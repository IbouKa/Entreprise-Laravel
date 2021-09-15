
@extends('layout')

@section('content')
    <a href="/clients/{{ $client->id }}/edit" class="btn btn-primary">Editer</a>
    <form action="/clients/{{ $client->id }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
    <h1>{{ $client->pseudo }}</h1>  
    <hr>
    <p><b>Adresse Email :</b>{{ $client->email }}</p>
    <p><b>Entreprise :</b>{{ $client->entreprise->nom }}</p>
    <p><b>Status :</b>{{ $client->status }}</p>
@endsection