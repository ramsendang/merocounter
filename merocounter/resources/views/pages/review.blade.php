@extends('template.template')
@section('title',"Mero Counter | My Payment")
@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col vh-100 d-flex justify-content-center align-items-center">
                <form action="/review" method="post" >
                    @csrf
                    <input type="hidden" name="user_id" value="{{session('loggedUser')}}">
                    <input type="hidden" name="busno" value="{{$bus->busno}}">
                    <div class="row">
                        <div class="col p-4">
                            <h3 class="text-center">Write your review it will help us improve</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col p-4">
                            <div class="form-group">
                                <label for="">How happy are you with our service</label>
                            </div>
                            <input type="range" class="form-control-range" min="0" max="10" name="rating" id="formControlRange">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col p-4">
                            <div class="form-group">
                                <label for="">What is your openion about our service?</label>
                                <textarea name="review" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col p-4 d-flex justify-content-center">
                            <button class="btn btn-primary w-100" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection