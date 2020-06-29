<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class address extends Controller
{
    public function address_details($id)
    {
    	return view('address',['data'=>$id]);
    	
    }

    
}
