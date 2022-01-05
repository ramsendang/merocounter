@extends ('template.template')

@section('title',"Mero Counter")


@section('main_content')

<div class="vendor_login_container">
    <div class="login_form_container">
        <form action="/login" method="post">
        @csrf
            <div class="vendor_login_form_container">
                <div class="vendor_login_title">
                    <p><i class="fas fa-user user__icon"></i>User Login form</p>
                </div>
                <div class="vendor_login_username">
                    <label for="">Email  *</label>
                    <input type="text" name="email" placeholder="Enter your username">
                    @error('email')
                    <span class="validation_error">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="vendor_login_password">
                    <label for="">PASSWORD  *</label>
                    <input type="password" name="password" placeholder="Enter your Password">
                    @error('password')
                    <span class="validation_error">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="vendor_login_button">
                    <input type="submit" value="Login">
                </div>
                <div class="item">
                    Don't have account? <a href="/register">register here</a>
                </div>
                    @error('fail')
                    <span class="validation_error">
                        {{$message}}
                    </span>
                    @enderror
            </div>
        </form>
    </div>
</div>

@endsection