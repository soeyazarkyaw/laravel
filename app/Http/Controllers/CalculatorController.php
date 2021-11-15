<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(){
        return view('index');
    }

    public function calculate(Request $request){
        $data = $this->getData($request);
        $showResult = $this->process($data);
        return back()->with(['result' => $showResult]);
    }


    private function getData($request){
        return [
            'num1'=>$request->num1,
            'num2'=>$request->num2,
            'operator'=>$request->operator,
        ];
    }
    private function process($data){
        $result = "";
        switch($data['operator']){
            case 'empty':$result = "Choose operator?";
            break;
            case 'add':$result = $data['num1'] + $data['num2'];
            break;
            case 'minus':$result=$data['num1'] - $data['num2'];
            break;
            case 'multi':$result=$data['num1'] * $data['num2'];
            break;
            case 'division':$result=$data['num1'] / $data['num2'];
            break;
            default:$result= "error";
        }
        return $result;

    }
}
