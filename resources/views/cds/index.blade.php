@extends("layouts.main")

@section("content")
    <h1>archivio CD</h1>
    <a class="btn btn-warning" href="{{route('cds.create')}}">CREATE</a>
    <div id="table-container">
        <table class="table-striped table mt-5">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>titolo</th>
                    <th>artista</th>
                    <th>prezzo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cds as $cd)
                    <tr>
                        <td>{{$cd->id}}</td>
                        <td>{{$cd->titolo}}</td>
                        <td>{{$cd->artista}}</td>
                        <td>{{$cd->prezzo}} €</td>
                        <td class="text-center" width="100"><a href="{{route('cds.show', $cd->id)}}" class="btn btn-primary">SHOW</a></td>
                        <td class="text-center" width="100"><a href="{{route('cds.edit', $cd->id)}}" class="btn btn-info">EDIT</a></td>
                        <td class="text-center" width="100"><a href="{{route('cds.destroy', $cd->id)}}" class="btn btn-danger">DELETE</a></td>
                        
                    </tr>
                    

                @endforeach
            </tbody>
        </table>
    </div>
@endsection