<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function register (){
        return view('form');
    }
    public function create (Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'date' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $data = $this->getdata($request);
        Customer::create($data);
        return back()->with(['sucess'=>'Register Finish']);
    }
    public function list(){
        $data = Customer::paginate(2);
        return view('list')->with(['customer'=>$data]);
    }
    public function seemore($id){
        $data = Customer::where('customer_id','=',$id)->get();
        return view('seemore')->with(['customer'=>$data]);

    }

    public function delete($id){
        Customer::where('customer_id',$id)->delete();
        return back()->with(['sucess'=>'delete finish']);
    }

    public function edit($id){
        $data = Customer::where('customer_id','=',$id)->get();
        return view('edit')->with(['customer'=>$data]);
    }

    public function update($id,Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'date' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $updatedata = $this->getdata($request);
        $updatedata['id'] = $id;
        Session::put('User_data',$updatedata);
        return redirect()->route('confirm');
    }

    public function confirm(){
        return view('confirm')->with(['customer'=>Session::get('User_data')]);
        
    }

    public function realupdate(){
        $data = Session::get('User_data');
        $id = $data['id'];
        unset($data['id']);
        Customer::where('customer_id',$id)->update($data);
        return redirect()->route('list')->with(['success'=>'update finish']);

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
