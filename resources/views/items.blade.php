@extends('master')
@section('title','items')

@section('navbar')
@parent

<h1>..</h1>
<h2 style="color: #85929E; text-align: center;">NA- Earphones online shop</h2>


@foreach($data as $i)
<div class="card " style="width: 13rem;  height:25rem; float: left; margin-left: 50px; margin-top: 20px;">
  <img class="card-img-top" src="{{asset('upload/image2/'.$i->image)}}" alt="Card image cap" width="100px" height="150px">
  <div class="card-body">
    <h5 class="card-title">{{$i->product}}</h5>

    <p class="card-text" style="font-size: 11px;">{{$i->product_details}}</p>
    <p class="card-text " style="font-size: 15px;">
    {{$i->price}}</p>

     <input type="hidden" name="product_id" value="<?php echo $i->id;?>">
     @if(Auth::check())
    <a href="/order/{{$i->id}}" class="btn btn-primary col" style="padding-bottom: 2px;">Buy</a>
    @endif
    @if(Auth::check()==0)
    <a href="/login" class="btn btn-primary col" style="padding-bottom: 2px;">Buy</a>
    @endif
  </div>

</div>

@endforeach
 <div style="padding-top: 900px; padding-left: 600px;">
{{$data->links()}}
</div>
<!-- Footer -->
<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">NA-earphones shop</h5>
        <p>Noor alam online earphone shop. provide best serve for you.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Facebook</a>
          </li>
          <li>
            <a href="#!">Instagram</a>
          </li>
          <li>
            <a href="#!">Pubg</a>
          </li>
          <li>
            <a href="#!">Youtube</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Wizard Gaming</a>
          </li>
          <li>
            <a href="#!">Whatsapp</a>
          </li>
          <li>
            <a href="#!">Facebook</a>
          </li>
          <li>
            <a href="#!">....</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> NAonlineshop.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
@stop