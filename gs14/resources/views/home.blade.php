<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link  rel="stylesheet" href="css/style.css"> --}}
     
   <link  rel="stylesheet" href="{{ asset('css/style.css' )}}">
        <title>Laravel</title>
    </head>
    <body>
        <h1>Home page</h1>


{{-- <script src="js/myscript.js"></script> --}}

<script src={{ asset('js/myscript.js') }}></script>
      
    </body>
</html>