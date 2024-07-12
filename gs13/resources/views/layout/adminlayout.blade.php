<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">

        <title>@yield('title')</title>

        <!-- Fonts -->
    

    </head>
    <body>
        
 @yield('page-name')


 @section('default-content')

 <h1>This is layout default text</h1>
     
 @show



    </body>
</html>
