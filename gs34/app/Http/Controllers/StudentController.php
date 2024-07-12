<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;



class StudentController extends Controller
{
    //
    public function show(){
        $student=DB::table('student1')->paginate(3);
        return view('student',['students'=>$student]);
    }
}
