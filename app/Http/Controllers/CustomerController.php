<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function register (){
        return view('form');
    }
    public function create (Request $request){
        $data = $this->getdata($request);
        Customer::create($data);
        return back()->with(['sucess'=>'Register Finish']);
    }
    private function getdata($request){
        return [
            'name'=>$request->name,
            'email'=>$request->email,
            'gender'=>$request->gender,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'date'=>$request->date,
        ];
    }
}
