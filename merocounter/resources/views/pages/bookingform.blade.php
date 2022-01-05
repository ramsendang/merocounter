@extends ('template.template')

@section('title',"Mero Counter")


@section('main_content')
<div class="container" style="min-height: 100vh">
    <div class="row text-center p-2">
        <div class="col">
            <h4>Bus Booking Form</h4>
        </div>
    </div>
    <div class="row">
        <div class="col border-1">
            @if(session()->has('loggedUser'))
            <form action="/availablebus/book" method="post" class="border-1 border-dark"> 
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name="fname" value="{{$fname}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="lname" value="{{$lname}}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{$email}}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Mobile Number</label>
                            <input type="text" name="mobile" value="{{$mobile}}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">From</label>
                            <input type="text" name="from" class="form-control" value="{{$from}}" placeholder="" >
                        </div>
                    </div>  
                    <div class="col-lg-6">
                            <label for="">To</label>
                            <input type="text" name="to" class="form-control" value="{{$to}}" placeholder="" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Bus Number</label>
                            <input type="text" name="busno" class="form-control" value="{{$bus->busno}}" placeholder="" >
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Bus Name</label>
                            <input type="text" name="busname" class="form-control" value="{{$bus->busname}}" placeholder="" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Price per Ticket</label>
                            <input type="text" name="price" class="form-control" value="{{$bus->price}}" placeholder="" >
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="">Select No of Seats</label>
                        <select id="inputState" name="totalseat" class="form-control">
                            <option selected>Choose...</option>
                            <?php 
                            $seatno = $bus->totalseat;
                            for($i=1; $i<=$seatno; $i++){
                            ?>
                            <option value="<?php echo($i)?>"><?php echo($i)?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" name="date" value="{{$bus->routedate}}" class="form-control" >
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="time" value="{{$bus->routetime}}" class="form-control"     >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" class="btn btn-primary" value="Book Now">
                    </div>
                </div>
            </form>
            @else
            <form action="/availablebus/book" method="post" class="border-1 border-dark"> 
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name="fname" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="lname" value="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" value="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Mobile Number</label>
                            <input type="text" name="mobile" value="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">From</label>
                            <input type="text" name="from" class="form-control" value="{{$from}}" placeholder="" >
                        </div>
                    </div>  
                    <div class="col-lg-6">
                            <label for="">To</label>
                            <input type="text" name="to" class="form-control" value="{{$to}}" placeholder="" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Bus Number</label>
                            <input type="text" name="busno" class="form-control" value="{{$bus->busno}}" placeholder="" >
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Bus Name</label>
                            <input type="text" name="busname" class="form-control" value="{{$bus->busname}}" placeholder="" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Price per Ticket</label>
                            <input type="text" name="price" class="form-control" value="{{$bus->price}}" placeholder="" >
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="">Select No of Seats</label>
                        <select id="inputState" name="totalseat" class="form-control">
                            <option selected>Choose...</option>
                            <?php 
                            $seatno = $bus->totalseat;
                            for($i=1; $i<=$seatno; $i++){
                            ?>
                            <option value="<?php echo($i)?>"><?php echo($i)?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" name="date" value="{{$bus->routedate}}" class="form-control" >
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="time" value="{{$bus->routetime}}" class="form-control"     >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" class="btn btn-primary" value="Book Now">
                    </div>
                </div>
            </form>
            @endif
        </div>
    </div>
</div>

@endsection