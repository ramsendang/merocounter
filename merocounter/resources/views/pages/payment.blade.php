@extends('template.template')
@section('title',"Mero Counter | My Payment")
@section('main_content')
    <div class="container" style="min-height:100vh">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Ticket NO</th>
                        <th scope="col">No of Seat</th>
                        <th scope="col">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">{{$booking->id}}</th>
                        <td>{{$booking->totalseat}}</td>
                        <td>
                            <?php 
                                $price = $booking->price;
                                $totalseat = $booking->totalseat;
                                $totalprice = $price*$totalseat
                            ?>
                            {{$totalprice}}
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-primary m-3 text-center" href="{{ route('processTransaction') }}">Pay {{$totalprice}}</a>
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