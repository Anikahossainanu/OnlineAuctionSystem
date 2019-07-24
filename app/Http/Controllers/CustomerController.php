<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    
    public function store(Request $request){
    	$name = $request->name;
    	$email = $request->email;
    	$password = md5($request->password);
    	$repeatPassword = md5($request->repeatPassword);

    	$obj = new Customer();
    	$obj->name = $name;
    	$obj->email = $email;
    	$obj->password = $password;
    	$obj->repeatPassword = $repeatPassword;

    	if($obj->password==$obj->repeatPassword){
    		if($obj->save()){
    			return redirect('login');
    		}
    	}
    }
}
