@extends ('template.template')

@section('title',"Mero Counter")


@section('main_content')
<!-- ------------------------------------------------------------------------------------------------------  -->
<div class="banner">
    <div class="banner_image_container">
        <img src="images/banner.jpg" class="banner_image" alt="">
    </div>
    <div class="banner_form">
        <form action="/searchbus" method="post">
            @csrf
            <div class="form_container">
                <div class="item form_heading">
                    <p>Searcg for Available Ticket</p>
                </div>
                <div class="item from__place">
                    <label for="bus">
                        From
                    </label>
                    <select name="from" id="">
                        <option value="Kathmandu">Kathmandu</option>
                        <option value="Pokhara">Pokhara</option>
                        <option value="Biratnagar">Biratnagar</option>
                        <option value="Nepalgung">Nepalgung</option>
                    </select>
                </div>
                <div class="item to__place">
                    <label for="to">
                        To
                    </label>
                    <select name="to" id="">
                        <option value="Kathmandu">Kathmandu</option>
                        <option value="Pokhara">Pokhara</option>
                        <option value="Biratnagar">Biratnagar</option>
                        <option value="Nepalgung">Nepalgung</option>
                    </select>
                </div>
                <div class="item date__place">
                    <label for="">
                        Date
                    </label>
                    <input type="date" name="date">
                </div>
                <div class="item form__submit">
                    <input type="submit" value="Search for Ticket">
                </div>
            </div>
        </form>
    </div>
</div>


<!-- ------------------------------------------------------------------------------------------------------  -->

<!-- ------------------------------------------------------------------------------------------------------  -->

<div class="container">
    <div class="toprating_heading">
        Top Rated bus of the week
    </div>
    <div class="row p-4">
        <div class="col-lg-4">
            <div class="card" style="width: 21rem;">
                <img src="/images/electricbus.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mahindra Super Delux</h5>
                    <p class="card-text">Bus no: G2467</p>
                    <p class="card-text">⭐⭐⭐⭐⭐⭐</p>
                    <p>Rank 1</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="width: 21rem;">
                <img src="/images/electricbus.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mahindra Super Delux</h5>
                    <p class="card-text">Bus no: G2467</p>
                    <p class="card-text">⭐⭐⭐⭐⭐</p>
                    <p>Rank 2</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="width: 21rem;">
                <img src="/images/electricbus.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mahindra Super Delux</h5>
                    <p class="card-text">Bus no: G2467</p>
                    <p class="card-text">⭐⭐⭐⭐</p>
                    <p>Rank 3</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- for about us section  -->
<div class="about_section" id="about">
    <div class="inner_container">
        <div class="about_text">
            <h1>About Us</h1>
            <p>    
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi inventore possimus asperiores laudantium. Blanditiis iste accusamus ullam nisi aliquid esse.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi inventore possimus asperiores laudantium. Blanditiis iste accusamus ullam nisi aliquid esse.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi inventore possimus asperiores laudantium. Blanditiis iste accusamus ullam nisi aliquid esse.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi inventore possimus asperiores laudantium. Blanditiis iste accusamus ullam nisi aliquid esse.
            </p>
        </div>
        <div class="about_image">
            <img src="/images/ticketcounter_logo.jpg" alt="" class="about_logo">
        </div>
    </div>
</div>

<!-- for add banner section  -->
<div class="banner_two">
    <img src="/images/banner_2.jpg" alt="" class="banner_two_image">
</div>

<!-- for our services  -->
<div class="services">
    <div class="toprating_heading">
        Our Services
    </div>
    <div class="service_inner_container">
        <div class="service_detail">
            <img src="/images/busbooking.jpg" alt="" class="service_image">
        </div>
        <div class="service_detail">
            <img src="/images/customerserv.jpg" alt="" class="service_image">
        </div>
        <div class="service_detail">
            <img src="/images/tour.jpg" alt="" class="service_image">
        </div>
    </div>
</div>

<!-- for add banner section  -->
<div class="banner_two">
    <img src="/images/banner3.jpg" alt="" class="banner_two_image">
</div>

<!-- for our payment partner  -->
<div class="services">
    <div class="toprating_heading">
        Payment partner
    </div>
    <div class="service_inner_container">
        <div class="service_detail">
            <img src="/images/esewa.jpg" alt="" class="service_image">
        </div>
        <div class="service_detail">
            <img src="/images/khalti.jpg" alt="" class="service_image">
        </div>
        <div class="service_detail">
            <img src="/images/paypal.jpg" alt="" class="service_image">
        </div>
    </div>
</div>

@endsection