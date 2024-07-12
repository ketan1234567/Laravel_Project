<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //

    function show(){

        // $data=$request->all;

        print_r("get_method");
    
        return view('registration');
    }
    function save(Request $request ){
        //print_r($request->input());

       $data=$request->all();

       // dd($request);

        return view('registration',['data'=>$data]);
    
}

}