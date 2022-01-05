@extends ('template.template')

@section('title',"Mero Counter | My Booking")


@section('main_content')

<div class="mybooking">
    <h2>My Booking</h2>
    <hr>
    <div class="mybooking_container">
        <table>
            <tr>
                <th>Ticket No.</th>
                <th>Full Name</th>
                <th>Bus No</th>
                <th>From</th>
                <th>To</th>
                <th>Departure</th>
                <th>Departure Date</th>
                <th>total Seat</th>
                <th>price per ticket</th>
                <th>total price</th>
                <th></th>
            </tr>
            @foreach($data as $datas)
            <tr>
                <td>00{{$datas->id}}</td>
                <td>{{$datas->fname}} {{$datas->lname}}</td>
                <td>{{$datas->busno}}</td>
                <td>{{$datas->destination_from}}</td>
                <td>{{$datas->destination_to}}</td>
                <td>{{$datas->time}}</td>
                <td>{{$datas->date}}</td>
                <td>{{$datas->totalseat}}</td>
                <td>{{$datas->price}}</td>
                <td>R.S.
                <?php 
                $price = $datas->price;
                $totalseat = $datas->totalseat;
                $totalprice = $price * $totalseat;
                echo($totalprice);
                ?>
                </td>
                <td>
                    <a href="/mybooking/pay/{{$datas->id}}">Pay now</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection