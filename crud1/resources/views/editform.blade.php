<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Curd Query Builder</title>
                <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


  

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <form action="" method="post">
                        @csrf
                        @method('PUT');

                        <div class="mb-3 mt-3">
                          <label for="email" class="form-label">Name</label>
                          <input type="text" class="form-control" id="name" placeholder="Enter name" value="{{$student->name}}" name="name">
                        </div>
                        <div class="mb-3">
                          <label for="pwd" class="form-label">city</label>
                          <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" value="{{$student->city}}">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">marks</label>
                            <input type="text" class="form-control" id="marks" placeholder="Enter marks" name="marks" value="{{$student->marks}}">
                          </div>
                       
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>

                      <!-- @if(session()->has('status'))
                      <div class="alert alert-success">
                        {{ session('status') }}
                      </div>
                     @endif -->

                </div>

             


            </div>

        </div>
 
    </body>
</html>
