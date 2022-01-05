@extends('template.admin')


@section('content')

<div class="register_bus">
    
    <form action="/registerBus" enctype="multipart/form-data" method="post" class="p-4">
        @csrf
        <div class="row text-center">
            Bus Register Form 1
        </div> 
        <div class="row">
           <p class="text-center"> Please Fill the Below form to Register your Bus</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="">Bus No</label>
                    <input type="text" class="form-control" name="busno" placeholder="Enter your Bus number....." value="{{old('busno')}}">
                    @error('busno')
                    <span class="errormessage">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="">Bus Name</label>
                    <input type="text" class="form-control" name="busname" placeholder="Enter your Bus Name....." value="{{old('busname')}}">
                    @error('busname')
                    <span class="errormessage">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="">Bus Driver</label>
                    <input type="text" class="form-control" name="busdriver" placeholder="Enter your driver name"> 
                    @error('busdriver')
                    <span class="errormessage">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="">Choose Associate Driver</label>
                    <input type="text" class="form-control" name="abusdriver" placeholder="Enter your Associate Driver Name">
                    @error('abusdriver')
                    <span class="errormessage">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="">Choose Bus Brand Name</label>
                    <input type="text" class="form-control" name="brand" placeholder="Enter your Bus Brand Name....." value="{{old('busbrandname')}}">
                    @error('brand')
                    <span class="errormessage">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="file">Upload Your Bus Image</label>
                    <input type="file" class="form-control-file" name="busimg">
                    @error('busimg')
                    <span class="errormessage">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="iteb_bus bill_book">
                    <label for="file">Upload Your Bus Bill book Image</label>
                    <input type="file" name="billbook">
                    @error('billbook')
                    <span class="errormessage">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="file">Upload Your Bus Insurence Image</label>
                    <input type="file" class="form-control-file" name="insurence">
                    @error('insurence')
                    <span class="errormessage">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="file">Upload Your Bus Driver's Licen Image</label>
                    <input type="file" class="form-control-file" name="licen">
                    @error('licen')
                    <span class="errormessage">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="file">Upload Your Bus Condition Image</label>
                    <input type="file" class="form-control-file" name="condition">
                    @error('condition')
                    <span class="errormessage">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="">Total no of Seat Available in Bus</label>
                    <input type="text" class="form-control" name="totalseat" placeholder="Enter your Bus total number of seat....." value="{{old('totalseat')}}">
                    @error('totalseat')
                    <span class="errormessage">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="status">
            <input type="hidden" name="status" value="0">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <input type="submit" class="btn btn-primary w-100" value="Add Bus">  
            </div>
        </div>
    </form>
    
</div>

@endsection