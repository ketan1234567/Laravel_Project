<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    </head>
    <body>
        <h1>Home Page</h1>
        {{-- <img src="images/ketan.png"> --}}

        <img src={{ asset('images/ketan.png') }}>
      
    </body>
</html>
