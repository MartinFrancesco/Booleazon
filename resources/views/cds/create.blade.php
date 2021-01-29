@extends("layouts.main")

@section("content")
    {{-- SEZIONE VISUALIZZAZIONE EVENTUALI ERRORI ALL'INVIO DELLA FORM --}}
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
        
        <form action="{{route('cds.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="titolo">
                     TITOLO
                </label>
                 <input class="form-control" type="text" name="titolo" placeholder="titolo" value="{{old('titolo')}}">
            </div>
            <div class="form-group">
                <label for="artista">
                    ARTISTA
                </label>
                 <input class="form-control" type="text" name="artista" placeholder="artista" value="{{old('artista')}}">
            </div>
            <div class="form-group">
                <label for="genere">
                     GENERE
                </label>
                 <input class="form-control" type="text" name="genere" placeholder="genere" value="{{old('genere')}}">
            </div>
            <div class="form-group">
                <label for="anno">
                     ANNO
                </label>
                 <input class="form-control" type="text" name="anno" placeholder="anno" value="{{old('anno')}}">
            </div>
            <div class="form-group">
                <label for="prezzo">
                     PREZZO
                </label>
                 <input class="form-control" type="text" name="prezzo" placeholder="prezzo" value="{{old('prezzo')}}">
            </div>
            <div class="form-group">
                <label for="cover">
                     COVER
                </label>
                 <input class="form-control" accept="image/" type="file" name="cover" placeholder="cover" value="{{old('cover')}}">
            </div>
            <div class="form-group">
                <input class="btn btn-warning" type="submit" value="CREATE">
            </div>
        </form>
    </div>
@endsection