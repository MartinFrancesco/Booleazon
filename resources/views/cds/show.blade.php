@extends("layouts.main")

@section("content")
   <div class="container">
      <h1 class="mb-5">
         {{$cd->titolo}} details page
     </h1>
     <img width="200" src=" {{ $cd->cover }} " alt="{{ $cd->titolo }}">
     <h2>
         ID: {{$cd->id}}
     </h2>
     <h4>
         Artista: {{$cd->artista}}
     </h4>
      <h4>
         Genere: {{$cd->genere}}
      </h4>
      <h4>
         Anno: {{$cd->anno}}
      </h4>
      <h4>
         Prezzo: {{$cd->prezzo}}
     </h4>
     <h4>
         Disponibilità:: {{$cd->disponibilità}}
      </h4>
     <hr>
     {{-- update & created CD --}}
     <h2>
         Created at:
      </h2>
      <h4>
          {{$cd->created_at->isoFormat('dddd DD/MM/YYYY')}}
      </h4>
      <hr>
      <h2>
         Updated at:
      </h2>
      <h4>
         {{$cd->updated_at->diffForHumans()}}
      </h4> 
   </div>
@endsection