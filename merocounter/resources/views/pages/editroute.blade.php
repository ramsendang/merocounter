@extends ('template.admin')


@section('content')
<div class="title">
    Edit Bus routes
</div>
<a href="/busroutes">back</a>

<div class="busroute_container">
    <form action="/editroute/{{$route->id}}" class="addroute__form" method="post">
        @csrf
        <label for="">Departure Time</label>
        <input type="text" name="departure_time" placeholder="Enter Departure Time" value="{{$route->departure_time}}">
        <label for="">Destination from</label>
        <input type="text" name="destination_from" placeholder="Enter Destination From" value="{{$route->destination_from}}">
        <label for="">Destination To</label>
        <input type="text" name="destination_to" placeholder="Enter Destination TO" value="{{$route->destination_to}}">
        <input type="submit" value="Update Route">
    </form>
</div>

@endsection