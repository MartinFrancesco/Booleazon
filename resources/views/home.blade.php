@extends('layouts.main')

@section('content')

    {{-- Vista --}}
    <h1>HOME PROVA</h1>

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