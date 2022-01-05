<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <!-- <link rel="stylesheet" href="/css/dashbord.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col-lg-3 bg-dark" style="height: 100vh">
            <div class="row">
                <a href="/dashbord" class="btn btn-secondary w-100 my-2"><p>Dashbord</p></a>
            </div>
            <div class="row">
                <a href="/bus" class="btn btn-primary w-100 mt-1 mb-2">My Buses</a>
            </div>
            <div class="row">
                <a href="/busroutes" class="btn btn-primary w-100">Route</a>
            </div>
        </div>
        <div class="col-lg-9 dashbord_item main_content_area">
                <div class="row nav bg-dark">
                    <form class="col-lg-4 form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> <i class="fas fa-search"></i> Search</button>
                    </form>
                    <div class="col-lg-8 d-flex justify-content-end align-items-center">
                        <div class="p-4">
                            <i class="fas fa-user-tie text-light"></i>
                        </div>
                        <div class="p-4">
                            <a href="/" class="nav-link text-light">Home</a>
                        </div>
                        <div class="p-4">
                            <form action="/logoutVendor" method="post">
                            @csrf
                                <button><i class="fas fa-sign-out-alt"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>