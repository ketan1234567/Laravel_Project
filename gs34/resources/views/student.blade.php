<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <title>Laravel</title>


        {{-- <style>
          body > nav > div.hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between > div:nth-child(2)
          {
            display: none;
          }
        </style> --}}
    </head>
    <body class="antialiased">
      <h1>Student Page</h1>

      @foreach ($students as $stu)
      {{
        $stu->id
      }}

{{
    $stu->name
  }}

{{
    $stu->city
  }}
          <br>
      @endforeach

      {{ $students->links() }}
    </body>
</html>
