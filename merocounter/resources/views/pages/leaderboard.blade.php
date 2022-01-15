@extends ('template.template')

@section('title',"Mero Counter | Leaderboard")


@section('main_content')
<div class="container" style="min-height: 100vh">
<div class="row">
    <div class="col-lg-4">
        <form action="" method="post">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="btn btn-primary" value="search">
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-8"></div>
</div>
<div class="row p-2">
    <h3>Leaderboard</h3>
</div>
 @foreach($data as $busdata)
    <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 p-4">
                <div class="row">
                    <h3>Rank {{$busdata->id}} </h3>
                </div>
                <div class="row">
                    <p>  
                        <?php
                        
                        $star = $busdata->rating;
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
            <div class="col-lg-4 col-md-4 col-sm-12 p-4">
                <div class="row">
                    <h5>{{$busdata->busname}}</h5>
                </div>
                <div class="row">
                    <h6>Driver: {{$busdata->busdriver}}</h6>
                </div>
                <div class="row">
                    <h6>Associate Driver: {{$busdata->associatebusdriver}}</h6>
                </div>
                <div class="row">
                    <h6>Bus No. {{$busdata->busno}}</h6>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <a href="/allbus/bus/{{$busdata->id}}" class="btn btn-primary">
                            View Details
                        </a>
                    </div>
                    <div class="col-lg-6">
                        @if(session()->has('loggedUser'))
                        <a href="/allbus/bus/{{$busdata->id}}" class="btn btn-primary">
                            Write a review
                        </a>
                        @else
                        <a href="/login" class="btn btn-primary">Login to Rate</a>
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-12 p-4">
                <img src="Storage/images/{{$busdata->busimgname}}" alt="" style="width:400px; height: 180px">
            </div>
        </div>
        @endforeach
@endsection