<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\items;
class cear extends Controller
{
   public function submit(Request $req)
   {
   		echo($req->file('image')->store('image2'));
   		$items=new items;
   		$image_name=$req->file('image');
   		$extension=$image_name->getClientOriginalName();
   		$filename=time().'.'.$extension;
   		$image_name->move('upload/image2',$filename);
   		$items->image=$filename;
   		$items->product=$req->product;
   		$items->product_details=$req->detail;
   		$items->price=$req->price;
   		$items->image=$filename;
   		//$items->extra="hello";
   		$items->save();
   		echo 'saved data';
   		



   }
}
