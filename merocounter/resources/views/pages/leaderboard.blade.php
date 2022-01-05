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
@endsection