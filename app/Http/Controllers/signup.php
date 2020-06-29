<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
//use Auth;
use Illuminate\Support\Facades\Auth;
class signup extends Controller
{
    public function user_details(Request $req)
    {	$this->validate($req,[
    			'fn' => 'required|min:5|max:35',
    			'ln' => 'required|min:5|max:35',
    			'email' => 'required|email|unique:customer',
    			'phone' => 'required|numeric',
    			'password' => 'required|min:6|max:20',
    			'password2' => 'required|min:6|max:20|same:password',
    			
    		],[
    			'fn.required' => ' The first name field is required.',
    			'fn.min' => ' The first name must be at least 5 characters.',
    			'fn.max' => ' The first name may not be greater than 35 characters.',
    			'ln.required' => ' The last name field is required.',
    			'ln.min' => ' The last name must be at least 5 characters.',
    			'ln.max' => ' The last name may not be greater than 35 characters.',
    			'phone.required'=>' mobile number required',
    			'phone.numeric'=>'mobile no. must be numeric',
    			'password.required'=>'password is required',
    			'password.min'=>'The password must be at least 5 characters.',
    			'password.max'=>'The password not be greater than 35 characters.',
    			'password2.same'=>'password must be same.'
    		]);
    	$users=new users;
    	$users->first_name=$req->fn;
    	$users->last_name=$req->ln;
    	$users->email=$req->email;
    	$users->phone=$req->phone;
    	$users->password=bcrypt($req->password);
    	$users->save();
    	return redirect('login');

    }


    public function dologin(Request $req)
    {
    	$userdata=array('email'=>$req->email,'password'=>$req->password);
    	if(Auth::attempt($userdata))
    	
    	{
    		return redirect('home');
    	}
    	else
    		{
    			echo'not';
    		}


    }
    public function logout(Request $request) 
    {
        Auth::logout();
        return redirect('/login');
    }
    public function show_Signup_page(Request $req)
    {
       
       return view('signup');
    }
}
