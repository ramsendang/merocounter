@extends('template.admin')


@section('content')

<div class="bus__dahbord">
    <div class="top_page">
        <div class="add_button">
            <a href="/registerBus" class="button">
                Add bus
            </a>
        </div>
    </div>
    <div class="table">
        <table>
            <tr>
                <th>Bus No</th>
                <th>Bus name</th>
                <th>Driver</th>
                <th>Associate Driver</th>
                <th>Bus Brand</th>
                <th>No of Seat</th>
                <th>status</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Assign Route & Price</th>
                
            </tr>
            @foreach($bus as $buses)
            <tr>
                <td>{{$buses->busno}}</td>
                <td>{{$buses->busname}}</td>
                <td>{{$buses->busdriver}}</td>
                <td>{{$buses->associatebusdriver}}</td>
                <td>{{$buses->busbrand}}</td>
                <td>{{$buses->totalseat}}</td>
                @if($buses->status == 0)
                    <td>Pending</td>
                @else
                    <td>Verified</td>
                @endif
                <td><a href="/updatebus/{{$buses->id}}"><i class="fas fa-edit"></i></a></td>
                <td><a href="/deletebus/{{$buses->id}}"><i class="fas fa-trash"></i></a></td>
                <td><a href="/assingroute/{{$buses->id}}">Assign</a></td>
            </tr>
            @endforeach
            
        </table>
    </div>
    
</div>

@endsection