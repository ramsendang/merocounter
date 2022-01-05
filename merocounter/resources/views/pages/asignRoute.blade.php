@extends('template.admin')


@section('content')
<div class="container">
    <div class="row text-center">
        <h4>Assign Route to your bus</h4>
    </div>
    <div class="row">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-4">
            <div class="container">
                <div class="row">
                    <form action="/addroute/{{$bus->id}}" method="post">
                    @csrf
                        <input type="hidden" name="id" value="{{$bus->id}}">
                        <input type="hidden" name="busno" value="{{$bus->busno}}">
                        <input type="hidden" name="busname" value="{{$bus->busname}}">
                        <input type="hidden" name="busdriver" value="{{$bus->busdriver}}">
                        <input type="hidden" name="abusdriver" value="{{$bus->associatebusdriver}}">
                        <input type="hidden" name="brand" value="{{$bus->busbrand}}">
                        <input type="hidden" name="busimg" value="{{$bus->busimgname}}">
                        <input type="hidden" name="billbook" value="{{$bus->billbookname}}">
                        <input type="hidden" name="insurence" value="{{$bus->insurencename}}">
                        <input type="hidden" name="licen" value="{{$bus->licenname}}">
                        <input type="hidden" name="condition" value="{{$bus->conditonname}}">
                        <input type="hidden" name="totalseat" value="{{$bus->totalseat}}">
                        <input type="hidden" name="status" value="{{$bus->status}}">

                        <div class="form-group ">
                            <label for="inputState">Select Routes to assign</label>
                            <select id="inputState" name="route" class="form-control">
                                @foreach($route as $routes)
                                <option value="{{$routes->id}}"> {{$routes->destination_from}} to {{$routes->destination_to}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputState">Enter the rent amount</label>
                            <input type="text" name="price" class="form-control" placeholder="Enter the bus rent">
                        </div>
                        <div class="form-group">
                            <label for="">Enter date and time</label>
                            <input type="date" name="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Enter date and time</label>
                            <input type="time" name="time" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Asign Route</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">


        </div>
    </div>
</div>
@endsection