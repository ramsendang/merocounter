@extends ('template.template')

@section('title',"Mero Counter | All Buses")


@section('main_content')
<div class="container">
    <div class="row">
        <div class="col">
            <h4>Search</h4>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="#" method="get">
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" name="search" placeholder="Enter bus no">
                    </div>
                    <div class="col-lg-1">
                        <input type="submit" class="btn" value="search">
                    </div>
                </div>

            </form>
        </div>
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
                        <a href="/allbus/bus/{{$busdata->id}}" class="btn btn-primary">
                            Write a review
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-12 p-4">
                <img src="Storage/images/{{$busdata->busimgname}}" alt="" style="width:400px; height: 180px">
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

