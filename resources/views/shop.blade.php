@extends('layouts.main')

@section('content')

    {{-- Vista --}}
    @foreach ($cds as $cd)
        <ul>
            <li>
                {{$cd->titolo}}
            </li>
        </ul>
    @endforeach
@endsection