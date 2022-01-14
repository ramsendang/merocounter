    

@extends('template.template')
@section('title',"Mero Counter | My Payment")
@section('main_content')

    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center min-vh-100 flex-column">
                <a class="btn btn-primary m-3" href="/mybooking">Return to Home</a>
                @if(\Session::has('error'))
                    <div class="alert alert-danger">{{ \Session::get('error') }}</div>
                    {{ \Session::forget('error') }}
                @endif
                @if(\Session::has('success'))
                    <div class="alert alert-success">{{ \Session::get('success') }}</div>
                    {{ \Session::forget('success') }}
                @endif
            </div>
        </div>
    </div>
@endsection