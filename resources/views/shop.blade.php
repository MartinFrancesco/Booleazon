@extends('layouts.main')

@section('content')

    {{-- Vista --}}
    @foreach($cds as $cd)
    <div>
        <div class="container-card">
                    <div class="card" id="salsa">
                        <div class="img-bx">
                            <img src="{{ $cd->cover }}" alt="{{ $cd->titolo }}">
                        </div>
                        <div class="content-bx">
                            <h4>{{$cd->titolo}}</h4>
                            <div class="artista">
                               <h5>{{$cd->artista}}</h5>
                            </div>
                            <div class="prezzo">
                            <h5>{{$cd->prezzo}} €</h5>
                            </div>
                            <a href="#">Guarda dettaglio</a>
                        </div>
                    </div>
            </div>
    </div>
    @endforeach
@endsection