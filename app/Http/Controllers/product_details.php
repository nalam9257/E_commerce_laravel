<?php

namespace App\Http\Controllers;
use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class product_details extends Controller
{
    public function index(Request $req)
    {
    	$data=DB::table("items")->paginate(10);
    	return view('items',['data'=>$data]);
    	
    }
}
