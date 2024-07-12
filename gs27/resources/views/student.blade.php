<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="antialiased">
     <h1>Student Page</h1>
     @foreach ($students as $stu)
     {{ $stu->id }}
     {{ $stu->name}}
     {{ $stu->email }}
     {{ $stu->city }}
     
         <br>
     @endforeach
    </body>
</html>
