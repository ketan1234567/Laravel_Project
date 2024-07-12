<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    function show(){

       $students="";
       
    // $students= DB::table('student1')->get();

    // $students=DB::table('student1')->first();

    // $students=DB::table('student1')->where('city','udgir')->first();

    // $students=DB::table('student1')->where('city','udgir')->value('name');
    // dd($students);

    // $students=DB::table('student1')->find(4);

    //  $students=DB::table('student1')->pluck('marks','name');

    // $students=DB::table('student1')->orderBy('id')->chunk(3,function($students){

    //     echo 'chunk of data <br>';
    //   foreach ($students as $stu) {


    //   echo $stu->name;
    //   echo'<br>';
    //   }

    //   return false;
    // });

    // if(DB::table('student1')->where('id',20)->exists()){
    //     dd('Yes');
    // }




  //  $students=DB::table('student1')->count();
    // dd($students);
     


        $students = DB::table('student1')->where('id','=',4)->get();

        // dd($students);

       return view('student',['students'=>$students]);
    }
}
