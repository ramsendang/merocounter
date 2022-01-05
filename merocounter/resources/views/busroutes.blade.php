@extends ('template.admin')


@section('content')
<div class="title">
    Bus routes
</div>
<a href="/addroute">Add</a>
<div class="busroute_container">
    
    <table>
        <tr>
            <th>Departure Time</th>
            <th>Departure from</th>
            <th>Destination</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        @foreach ($route as $routes)
        <tr>
            <td>{{$routes->departure_time}}</td>
            <td>{{$routes->destination_from}}</td>
            <td>{{$routes->destination_to}}</td>
            <td><a href="/editroute/{{$routes->id}}">edit</a></td>
            <td>
                <form action="/deleteroute/{{$routes->id}}" method="post">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection