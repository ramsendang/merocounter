@extends ('template.admin')


@section('content')
<div class="title">
    Add Bus routes
</div>
<a href="/busroutes">back</a>

<div class="busroute_container">
    <form action="/addroute" class="addroute__form" method="post">
        @csrf
        <label for="">Departure Time</label>
        <input type="text" name="departure_time" placeholder="Enter Departure Time">
        <label for="">Destination from</label>
        <input type="text" name="destination_from" placeholder="Enter Destination From">
        <label for="">Destination To</label>
        <input type="text" name="destination_to" placeholder="Enter Destination TO">
        <input type="submit" value="Add Route">
    </form>
</div>

@endsection