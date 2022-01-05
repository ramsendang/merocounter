@extends ('template.template')

@section('title',"Mero Counter")


@section('main_content')
<!-- ------------------------------------------------------------------------------------------------------  -->
<div class="vendor_register_container">
    <div class="register_form_container">
        <form action="/vendorRegister" method="post">
            @csrf
            <div class="vendor_register_form_container">
                <div class="item vendor_register_title">
                    <p>Vendor Register form</p>
                </div>
                <div class="item firstname">
                    <label for="">First Name *</label>
                    <input type="text" name="firstname" placeholder="Enter your first name" value="{{ old('firstname') }}">
                    @error('firstname')
                    <span class="validation_error">
                        required
                    </span>
                    @enderror
                </div>
                    
                <div class="item lastname">
                    <label for="">Last Name *</label>
                    <input type="text" name="lastname" placeholder="Enter your last name" value="{{ old('lastname') }}">
                    @error('lastname')
                    <span class="validation_error">
                        required
                    </span>
                    @enderror
                </div>
                <div class="item vendor_name">
                    <label for="">Company Name *</label>
                    <input type="text" name="companyname" placeholder="Enter your company name" value="{{ old('companyname') }}">
                    @error('companyname')
                    <span class="validation_error">
                        required
                    </span>
                    @enderror
                </div>
                <div class="item email">
                    <label for="">Email *</label>
                    <input type="text" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                    @error('email')
                    <span class="validation_error">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="item mobile">
                    <label for="">Mobile *</label>
                    <input type="text" name="mobile" placeholder="Enter your mobile number" value="{{ old('mobile') }}">
                    @error('mobile')
                    <span class="validation_error">
                        required
                    </span>
                    @enderror
                </div>
                <div class="item password">
                    <label for="">Password *</label>
                    <input type="password" name="password" placeholder="Enter your password">
                    <span>Must be combination of a-z, A-Z, 1-9 & sepcial character</span>
                    @error('password')
                    <span class="validation_error">
                        required
                    </span>
                    @enderror
                </div>
                
                <div class="item gender">
                    <div class="gender_title">
                        <p>Gender</p>
                    </div>
                    <div class="gender_item gender_male">
                        <input type="radio" name="gender" value="male">
                        <label for="">Male</label>
                    </div>
                    <div class="gender_item gender_female">
                        <input type="radio" name="gender" value="female">
                        <label for="">Female</label>
                    </div>
                    <div class="gender_item gender_other">
                        <input type="radio" name="gender" value="other">
                        <label for="">Other</label>
                    </div>
                    @error('gender')
                    <span class="validation_error">
                        select any gender
                    </span>
                    @enderror                    
                </div>
                <div class="item terms_and_condition">
                    <input type="checkbox" name="terms" value="1">
                    <label for="">I accept the <a href="">terms & conditions</a></label>
                    @error('terms')
                    <span class="validation_error">
                        Must accept the terms
                    </span>
                    @enderror
                </div>
                <div class="item vendor_register_submit">
                        <input type="submit" value="Register">
                    </div>
                
                <div class="item vendor_register_login_link">
                    Already have an account? <a href="/vendorlogin">login here</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection