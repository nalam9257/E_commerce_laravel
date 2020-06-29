@extends('master')
@section('title','order')
@section('navbar')
@parent
@foreach($data as $i)

<h1>{{$i->product}}</h1>
<div class="card" style="width: 80%; margin-top: 5%; margin-left: 10%;">
  <div class="card-body">
    <h2 class="card-title">Order summary</h2>
    <h6 class="card-subtitle mb-2 text-muted">Details of your order</h6>
    	<p class="card-text"><h5>Name of product :</h5>{{$i->product}}</p>
     	<p class="card-text"><h5>Name of id:</h5>{{$i->id}}</p>
     	<p class="card-text"><h5>Name of desc:</h5>{{$i->product_details}}</p>
    <h6 class="card-subtitle mb-2 text-muted">Details of Buyer</h6>
     	<p class="card-text"><h6>Name:</h6>{{Auth::user()->first_name}}&nbsp{{Auth::user()->last_name}}</p>
      	<p class="card-text"><h6>Mobile:</h6>{{Auth::user()->phone}}</p>
       	<p class="card-text"><h6>Email:</h6>{{Auth::user()->email}}</p>
@endforeach
       
       <h6>Address:</h6>
       <address>
       	<form action="/summary" method="post">
       		@csrf
       		<input type="hidden" name="hn" value="{{$house_no}}" style="border: none;">
       		<input type="hidden" name="sn" value="{{$street_no}}" style="border: none;">
       		<input type="hidden" name="mh" value="{{$muhalla}}" style="border: none;">
   			<input type="hidden" name="nb" value="{{$nearby}}" style="border: none;">
			<input type="hidden" name="ct" value="{{$city}}" style="border: none;">
			<input type="hidden" name="st" value="{{$state}}" style="border: none;">
			<input type="hidden" name="pn" value="{{$pincode}}" style="border: none;">
			{{$house_no}}&nbsp{{$street_no}}&nbsp{{$muhalla}}&nbsp{{$nearby}}&nbsp{{$city}}&nbsp{{$state}}&nbsp{{$pincode}}
			<br><button type="submit" style="background-color: #2980B9;">Place Order</button>
		</form>
		</address>

       
    
    
  </div>
</div>


@stop
