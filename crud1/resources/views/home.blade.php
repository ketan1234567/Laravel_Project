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
                        <div class="mb-3 mt-3">
                          <label for="email" class="form-label">Name</label>
                          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                        </div>
                        <div class="mb-3">
                          <label for="pwd" class="form-label">city</label>
                          <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">marks</label>
                            <input type="text" class="form-control" id="marks" placeholder="Enter marks" name="marks">
                          </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>

                      @if(session()->has('status'))
                      <div class="alert alert-success">
                        {{ session('status') }}
                      </div>
                     @endif

                </div>

                <div class="col-sm-6">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>city</th>
                            <th>Marks</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $stu)
                            <tr>
                                <td>{{$stu->id}}</td>
                                <td>{{$stu->name}}</td>
                                <td>{{$stu->city}}</td>
                                <td>{{$stu->marks}}</td>

                                <td>
                                    <a href="{{ url('/edit',$stu->id) }}" class="btn btn-primary">
                                    edit</a>

                                    <a href=" {{ url('/delete',$stu->id) }}" class="btn btn-danger">Delete</a>



                                </td>
                               
                              </tr>
                                
                            @endforeach
         
              
                        </tbody>
                      </table>
                  

                </div>


            </div>

        </div>
 
    </body>
</html>
