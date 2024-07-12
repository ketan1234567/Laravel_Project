<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function show(){
        $user='Admin';
        $userType=$user=='Admin'?true:false;

        $student=['ketan','rahul','sumit'];
        return view('product',['userType'=>$userType,'student'=>$student]);
    }
}
