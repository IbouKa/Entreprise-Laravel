
@extends('layout')

@section('content')
    <h1>Clients</h1>
    <a type="submit" href="client/create"class="btn btn-primary my-3">Nouveau client</a>
     
           
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Status</th>
            <th scope="col">Entreprise</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <th scope="row">{{ $client->id }} </th>
                <td><a href="client/{{ $client->id }}">{{ $client->pseudo }}</a> </td>
                <td>{{ $client->status  }} </td>
                <td>{{ $client->entreprise->nom }} </td>
            </tr>
            @endforeach
        
        </tbody>
      </table>

@endsection