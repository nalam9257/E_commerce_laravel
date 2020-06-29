<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\address;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class address_save extends Controller
{
    public function save_address(Request $req,$id)
    {	
    	
		$house_no=$req->house;
		$street_no=$req->street;
		$muhalla=$req->muhalla;
		$state=$req->state;
		$city=$req->city;
		$nearby=$req->nearby;
		$pincode=$req->pincode;
		
			
		
			
			
			$email=DB::table('address')->where('email',Auth::user()->email)->get();
			$data=DB::table('items')->where('id',$id)->get();
			return view('summary',['house_no'=>$house_no,'street_no'=>$street_no,'muhalla'=>$muhalla,'state'=>$state,'city'=>$city,'nearby'=>$nearby,'pincode'=>$pincode,'email'=>$email,'data'=>$data]);
			
    	
    	
    }

    public function summary(Request $req)
    {	
		$ad=new address();
    	$ad->house_no=$req->hn;
		$ad->street_no=$req->sn;
		$ad->muhalla=$req->mh;
		$ad->state=$req->st;
		$ad->city=$req->ct;
		$ad->nearby=$req->nb;
		$ad->pincode=$req->pn;
		$email=DB::table('address')->where('email',Auth::user()->email)->get();
		if(Auth::check());
		{
			$email=Auth::user()->email;
			$ad->email=$email;
			$ad->save();
		}
		$req->session()->flash('message.level', 'success');
        $req->session()->flash('message.content', 'your order was successfully added!');
		return redirect('home');

    }
}
