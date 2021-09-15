@extends('../layout')

@section('content')
    <h1>Editer le client {{ $client->pseudo }}</h1>
   

    <hr>
    <form action="/clients/{{ $client->id }}" method="post">
        @method("PATCH")
        @include('includes.form')
        <hr>
        <button type="submit" class="btn btn-primary">Sauvegarder</button>
    </form>
@endsection