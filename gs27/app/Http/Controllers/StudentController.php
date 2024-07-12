<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    function show(){

        $students="";
      //
     // dd($stuent);
    //   $students=  DB::select('Select * From student where city=?',['udgir']);

        //    $students=  DB::select('Select * From student where id=?',[1]);

        // DB::insert('insert into student (name,email,city)
        // values(?,?,?)',['damin','damin@gmail.com','pune']);

    //     $name="vishal";
    //     $email="vishal@gmail.com";
    //     $city="mumbai";

    //     DB::insert('insert into student (name,email,city)
    //     values(:nm,:email,:city)',['nm'=>$name,'email'=>$email,'city'=>$city]
    // );


    //DB::update('update student set city=? where id=?',['kolapur',1]);

    //DB::delete('delete from student where id=?',[1]);

    // DB::transaction(function(){

    // DB::update('update student set city=? where id=?',['kolapur',2]);

    // DB::delete('delete from student where id=?',[3]);

    // DB::insert('insert into student (name,email,city)
    //  values(?,?,?)',['ketan','damin@gmail.com','pune']);




    // });
    //    $students=  DB::table('student1')->where('id','=',4)->orWhere('name','=','komal')->get();

    // $students=  DB::table('student1')->whereBetween('marks',[100,200])->get();

    // $students=  DB::table('student1')->groupBy('marks')
    // ->having('marks','>',50)->get();
       //dd($students);

    //    $students=  DB::table('student1')->skip(2)->take(4);
    // // ->having('marks','>',50)->get();

    // dd($students);

    //  DB::table('student1')->insert([
    //     'name'=>'akshay',
    //     'email'=>'savalekarakshay647@gmail.com',
    //     'city'=>'nagapur',
    //     'marks'=>59,
    //     'pass_date'=>'2024-07-010'
        

    //  ]);


    
    //  DB::table('student1')->insert([

    //     [
    //         'name'=>'akshay',
    //         'email'=>'savalekarakshay647@gmail.com',
    //         'city'=>'nagapur',
    //         'marks'=>59,
    //         'pass_date'=>'2024-07-010'],
    
    //         [
    //             'name'=>'tile',
    //             'email'=>'savalekarakshay647@gmail.com',
    //             'city'=>'nagapur',
    //             'marks'=>60,
    //             'pass_date'=>'2024-07-010']

    //  ]
        
       
    
            
    
    
    // );

//    $id=  DB::table('student1')->insertGetId([
//         'name'=>'akshay',
//         'email'=>'savalekarakshay647@gmail.com',
//         'city'=>'nagapur',
//         'marks'=>59,
//         'pass_date'=>'2024-07-010'
        

//      ]);

//dd($id);

     //update method

    //  DB::table('student1')->where('id',2)->update([
    //     'name'=>'mittal',
    //     'email'=>'mittal@gmail.com',
    //     'city'=>'ranchi'
    //  ]);

    
    //  DB::table('student1')->updateOrInsert(
    //     ['name'=>'mittal'],
    //       ['email'=>'rani@gmail.com','city'=>'dumka']
    // );


    //delete method
   // DB::table('student1')->where('id',2)->delete();

    //truncate method

    //DB::table('student1')->truncate();






        return view('student',['students'=>$students]);
    }
}