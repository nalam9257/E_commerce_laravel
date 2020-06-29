@extends('master')
@section('title','signup')
	@section('navbar')
	@parent
	
	
	<!-- Default form register -->
<form class="text-center border border-light p-5" action="/login_auth" method="post">
    @csrf

    <p class="h1 mb-3" style="color: #85929E; padding-top: 4%; text-align: center;" >Login</p>

    

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password">
    
    

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Login</button>

    <!-- Social register -->
    

    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

    <hr>

    <!-- Terms of service -->
    <p>By clicking
        <em>Login</em> you agree to our
        <a href="" target="_blank">terms of service</a>
        <a href="signup" class="mx-2" role="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspsignup<i class="fab fa-facebook-f light-blue-text"></i></a>

</form>
@stop
<!-- Default form register -->

