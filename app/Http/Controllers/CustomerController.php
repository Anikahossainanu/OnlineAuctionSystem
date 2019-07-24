<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;
class CustomerController extends Controller
{
    
    public function store(Request $request){
    	$name = $request->name;
    	$email = $request->email;
    	$password = md5($request->password);
    	$repeatPassword = md5($request->repeatPassword);


        if($password == $repeatPassword){
    	$obj = new Customer();
    	$obj->name = $name;
    	$obj->email = $email;
    	$obj->password = $password;

    	    if($obj->save()){
			 return redirect('login');
            }    		
        }
    }

    public function loginStore(Request $request){
        $email = $request->email;
        $password = md5($request->password);

        $customer = Customer::where('email','=',$email)
            ->where('password','=',$password)
            ->first();
    if($customer){
        $request->session()->put('username',$customer->name);
        $request->session()->put('useremail',$customer->email);

        return redirect('adminPanel');
    }else{
        return redirect('login');
    }

    }

}
