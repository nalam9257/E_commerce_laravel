@extends('master')
@section('title','page tile')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@section('navbar')
@parent
	
	
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{URL('/images/earphones1.jpg')}}" alt="First slide">
      
    </div>
    <div class="carousel-caption d-none d-md-block">
      <div class="alert alert-{{ session('message.level') }}" style="margin-bottom: 28%; width: 100%;" > 
    {!! session('message.content') !!}
    </div>
    	
    	<div class="intro-heading text-uppercase" style="margin-bottom: 1%;"><h1 style="color: #C0392B">It's Nice To Meet You</h1></div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="/items" style="margin-bottom: 27%;">Let'go</a>
      </div>
    
</div>

    <div class="carousel-item">
      <img class="d-block w-100" src="{{URL('/images/earphones2.jpg')}}" alt="Second slide">
    </div>

    <div class="carousel-caption d-none d-md-block">
    
    
</div>
    
    <div class="carousel-item">
      <img class="d-block w-100" src="{{URL('/images/earphones3.jpg')}}" alt="Third slide" >
       <div class="carousel-caption d-none d-md-block">
    
</div>
    </div>
  </div>
</div>
@stop	