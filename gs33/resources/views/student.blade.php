<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="antialiased">
       <h1>Student Page</h1>

       {{-- multiple object accessing --}}
       {{-- @foreach ($students as $stu)

       {{ $stu->id }}
       {{ $stu->name }}
       {{ $stu->email }}
       {{ $stu->city }}
       {{ $stu->marks }}
   
       <br>
           
       @endforeach --}}

       {{-- single object accessing --}}

       {{-- {{$students->id }}
       {{$students->name }}
       {{$students->email }}
       {{$students->city  }}
       {{$students->marks }} --}}
    </body>
</html>
