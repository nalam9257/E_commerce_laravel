@extends('master')
@section('title','order')
@section('navbar')
@parent
<form style="padding: 100px;" action="order_address/{{$data}}">
  @csrf
   <p class="h1 mb-3" style="color: #85929E; padding-top: 4%; text-align: center;" >Fill up your address</p>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputhouse">House No.</label>
      <input type="text" class="form-control" id="inputhouse" placeholder="House no." name="house">
    </div>
    <div class="form-group col-md-6">
      <label for="inputstreet">Street No.</label>
      <input type="text" class="form-control" id="inputstreet" placeholder="street" name="street">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Muhalla</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Muhalla" name="muhalla">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Nearby</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="nearby">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state">
        <option selected>haryana</option>
        <option>delhi</option>
         <option>up</option>
         
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Pincode</label>
      <input type="text" class="form-control" id="inputZip" name="pincode">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">submit</button>
</form>
{{$data}}
@stop