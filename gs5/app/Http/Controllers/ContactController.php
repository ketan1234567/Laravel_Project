<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    function show(){
        $name="ketan";

        $student=['ketan','rahul','raj','narendra'];
        return view('contact',['name'=>$name,'student'=>$student]);
    }
}
