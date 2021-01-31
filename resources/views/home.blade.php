@extends('layouts.main')

@section('content')

    {{-- Vista --}}
    <h1>HOME PROVA</h1>

    {{-- CARD (DAVID--> VA IN SHOP) --}}
    {{-- <div>
        <div class="container-card">
                    <div class="card" id="salsa">
                        <div class="img-bx">
                            <img src="{{ asset('images/t-shirt.png') }}" alt="">
                        </div>
                        <div class="content-bx">
                            <h2></h2>
                            <div class="dates">
                               
                            </div>
                            <div class="coaches">
                            </div>
                            <a href="#">Guarda dettaglio</a>
                        </div>
                    </div>
            </div>
    </div> --}}


    <!-- The video -->
    <video autoplay muted loop id=“myVideo”>
    <source src=“rain.mp4" type=“video/mp4”>
    </video>
   <!-- Optional: some overlay text to describe the video -->
    <div class=“content”>
    <h1>Heading</h1>
    <p>Lorem ipsum...</p>
    <!-- Use a button to pause/play the video with JavaScript -->
    <button id=“myBtn” onclick=“myFunction()“>Pause</button>
   </div>
@endsection