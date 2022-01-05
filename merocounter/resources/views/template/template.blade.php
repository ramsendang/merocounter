<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"></script>
</head>
<body>
    <section class="contact_nav">
        <p>Call US - 460342</p>
    </section>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="/" class="navbar text-light"><p>Mero<span>Counter</span></p></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav ml-auto">
                    <li class="nav-item"><a href="/" class="nav-link text-light">Home</a></li>
                    <li class="nav-item"><a href="/leaderboard" class="nav-link text-light">Leaderboard</a></li>
                    <li class="nav-item"><a href="/allbus" class="nav-link text-light">All Buses</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link text-light">About Us</a></li>
                    <li class="nav-item"><a href="/mybooking" class="nav-link text-light">My Booking</a></li>
                    @if(session()->has('loggedVendor'))
                    <li class="nav-item"><a href="/dashbord" class="nav-link text-light">My Dashboard</a></li>
                    @else
                        @if(session()->has('loggedUser'))
                        <li class="nav-item"><a href="/logout" class="nav-link text-light">logout</a></li>
                        @else
                        <li class="nav-item"><a href="/login" class="nav-link text-light">Log in</a></li>
                        @endif
                    @endif
                </ul>
            </div>
    </nav>

    <div class="main">
        @yield('main_content')
    </div>

    <footer>
        <div class="nav_menu">
            <ul>
                <li><a href="">Terms & services</a></li>
                <li><a href="">Privacy & Policy</a></li>
                <li><a href="/vendorlogin">Join as Vendor</a></li>
            </ul>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>
</html>