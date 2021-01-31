@extends("layouts.main")

@section("content")
<div class="container">
        <H1>CIAOOO PAGINA CREATE</H1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif 
        
        <form action="{{route('cds.update' , $cd->id)}}"  method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="titolo">
                     TITOLO
                </label>
                 <input class="form-control" id="titolo" type="text" name="titolo" placeholder="titolo" value="{{ old('titolo', $cd->titolo) }}">
            </div>
            <div class="form-group">
                <label for="artista">
                    ARTISTA
                </label>
                 <input class="form-control" id="artista" type="text" name="artista" placeholder="artista" value="{{ old('artista', $cd->artista) }}">
            </div>
            <div class="form-group">
                <label for="genere">
                     GENERE
                </label>
                 <input class="form-control" id="genere" type="text" name="genere" placeholder="genere" value="{{ old('genere', $cd->genere) }}">
            </div>
            <div class="form-group">
                <label for="anno">
                     ANNO
                </label>
                 <input class="form-control"  id="anno" type="text" name="anno" placeholder="anno" value="{{ old('anno', $cd->anno) }}">
            </div>
            <div class="form-group">
                <label for="prezzo">
                     PREZZO
                </label>
                 <input class="form-control" id="prezzo" type="text" name="prezzo" placeholder="prezzo" value="{{ old('prezzo', $cd->prezzo) }}">
            </div>
            <div class="form-group">
                <label for="cover">
                     COVER
                </label>
                 <input class="form-control" id="cover" accept="image/" type="file" name="cover" placeholder="cover" value="{{ old('cover',  $cd->cover) }}">
            </div>
            <div class="form-group">
                <input class="btn btn-warning" type="submit" value="EDIT">
            </div>
        </form>
    </div>
@endsection