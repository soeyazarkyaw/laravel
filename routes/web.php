<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('form',function(){
    return view('user');  
});

Route::post('calculate',function(Request $request) {
    $num1 = $request->num1;
    $num2 = $request->num2;
    $result = $num1 + $num2;
    return back()->with(["result"=>$result]);
})->name('cal');

Route::get('login',function(){
    return view('login');  
});

Route::post('loginprocess',function(Request $request) {
    $email = 'soeyazarkyaw110@gmail.com';
    $password = 'soe12345';

    $useremail = $request->email;
    $userpassword = $request->password;
    if($email == $useremail && $password == $userpassword){
        return back()->with(["sucess"=>"login sucess"]);

    }else{
        return back()->with(["fail"=>"login fail/try again!"]);

    }
})->name('loginprocess');


Route::get('showpage',function(){
    if(Session::has('User_Data')){
        $userdata = Session::get('User_Data');
    }else{
        $userdata = null;
    }
    return view('layout.show')->with('userInfo',$userdata);
})->name('show');

Route::get('putpage',function(){
    return view('layout.put');
})->name('put');

Route::get('Threepage',function(){
    return view('layout.three');
})->name('threepage');

Route::post('sessionSave',function(Request $request){

    $data = [
        "name" => $request->name,
        "email" => $request->email,
        "address" => $request->address,
        "phone" => $request->phone,
    ];

    if($data['name'] != null && $data['email'] != null && $data['address'] != null && $data['phone'] != null){
        Session::put("User_Data",$data);
        return back()->with(['sucess'=>"save sucess"]);
    }else{
        return back()->with(['fail'=>"Please need to fill all"]);
    }

})->name('save');

Route::get('removeSession',function(){
    if(Session::has('User_Data')){
        Session::forget('User_Data');  
    return redirect('remove')->with(['sucess'=>'remove finish']);
    }else{
    return redirect('remove')->with(['sucess'=>'Remove finish pls fill data+++++++']);

    }
})->name('remove');

Route::get('remove',function(){
    return view('layout.remove');
})->name('removepage');

Route::get('calculator','CalculatorController@index')->name("index");
Route::post('calculateProcess','CalculatorController@calculate')->name("calculate");


//register
Route::group(['prefix'=>'customer'],function(){
Route::get('register','CustomerController@register')->name('register');
Route::post('register','CustomerController@create')->name('create');
Route::get('list','CustomerController@list')->name('list');
Route::get('seemore/{id}','CustomerController@seemore')->name('seemore');
Route::get('delete/{id}','CustomerController@delete')->name('delete');
Route::get('edit/{id}','CustomerController@edit')->name('edit');
Route::post('update/{id}','CustomerController@update')->name('update');
Route::get('confirm','CustomerController@confirm')->name('confirm');
Route::get('realupdate','CustomerController@realupdate')->name('realupdate');
});