@extends ('template.template')

@section('title',"Mero Counter")


@section('main_content')
<div id="map">
    
</div>

<div class="container p-4">
    @if($searchresult != [])
    @foreach($searchresult as $searchresults)
    <div class="row">
        <div class="col-lg-4">
            <h5>{{$searchresults->busname}}</h5>
            <div class="destination">
                <?php 
                ?>
                {{$from}} to {{$to}}
            </div>
            
            <div class="busno">
                Bus No. {{$searchresults->busno}}
            </div>
            <div class="price">
                Price :R.S.{{$searchresults->price}}
            </div>
            <div class="date">
                Date: {{$searchresults->routedate}}
            </div>
            <div class="departure_time">
                Time: {{$searchresults->routetime}}
            </div>
            <div class="rating">

            </div>
            <a href="/availablebus/book/{{$searchresults->id}}" class="btn btn-primary">
                Book Now
            </a>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <h3>Rank 18 </h3>
            </div>
            <div class="row">
                <p>
                    <?php
                    
                    $star = $searchresults->rating;
                    for($i=0; $i<$star; $i++){
                        echo "⭐";
                    }
                    ?>
                </p>
            </div>
            <div class="row">
                <h5>Top Review</h5>
            </div>
            <div class="row">
                <h6>Ram Kumar Sendang</h6>
                <p>"I love this bus. All the facility provided are very nice"</p>
            </div>
        </div>
        <div class="col-lg-4">
            <img src="images/bus2.jpg" alt="">
        </div>
    </div>
    @endforeach
    @else
    <div class="row">
        <div class="col text-center">
            <h1>Buses Not Available</h1>
        </div>
    </div>
    @endif   
</div>  

<script>
    function myMap(){
        var options ={
            zoom: 10,
            center: {lat: 27.2046, lng: -77.4977}
        }
        var map = new google.maps.Map(document.getElementById('map'), options);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnUgIKarTLkVM_lfShjIKeRPjakzpulEQ&callback=myMap"></script>

@endsection