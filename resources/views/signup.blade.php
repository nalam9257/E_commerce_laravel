@extends('master')
@section('title','signup')
	@section('navbar')
	@parent
	
	
	<!-- Default form register -->
<p class="h1 mb-3" style="color: #85929E; padding-top: 4%; text-align: center;" >Sign up</p>
<form class="text-center border border-light p-5" action="/register" method="post">
    @csrf
    

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" name="fn">
            <span class="text-danger">{{ $errors->first('fn') }}</span>
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" name="ln"><span class="text-danger">{{ $errors->first('ln') }}</span>
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">
    <span class="text-danger">{{ $errors->first('email') }}</span>
    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password">
    <span class="text-danger">{{ $errors->first('password') }}</span>
    <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Confirm password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password2">
    <span class="text-danger">{{ $errors->first('password2') }}</span>

    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
       
    </small>

    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="phone">
    <span class="text-danger">{{ $errors->first('phone') }}</span>
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        <!--""""""""""""""""""-->
    </small>

    <!-- Newsletter -->
    

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Sign in</button>

    <!-- Social register -->
    

    <a href="login" class="mx-2" role="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLogin<i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

    <hr>

    <!-- Terms of service -->
    <p>By clicking
        <em>Sign up</em> you agree to our
        <a href="" target="_blank">terms of service</a>

</form>
@error('password')
<div>kk</div>
@enderror
@stop
<!-- Default form register -->

