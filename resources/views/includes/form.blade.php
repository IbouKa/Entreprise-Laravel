@csrf
        <div class="form-group">
            <input type="text" class="form-control @error('pseudo') is-invalid @enderror" name="pseudo" value="{{ old('pseudo') ?? $client->pseudo }}" placeholder="Entrer votre Nom" id="">
            @error('pseudo')
                <div class="alert alert-danger">{{ $errors->first('pseudo') }}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $client->email }}" placeholder="Entrer votre Email" id="">
            @error('email')
                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <select class="form-select form-control @error('status') is-invalid @enderror" name="status" aria-label="Default select example">
                <option value="1">Actif</option>
                <option value="2">Inactif</option>
              </select>
            @error('status')
                <div class="alert alert-danger">{{ $errors->first('status') }}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <select class="form-select form-control @error('entreprise_id') is-invalid @enderror" name="entreprise_id" aria-label="Default select example">
                @foreach ($entreprises as $entreprise)
                    <option value="{{ $entreprise->id }}">{{ $entreprise->nom }}</option>
                @endforeach
              </select>
            @error('entreprise_id')
                <div class="alert alert-danger">{{ $errors->first('entreprise_id') }}</div>
            @enderror
        </div>