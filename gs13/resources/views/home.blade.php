@extends('layout.adminlayout')
@section('title','home') 



@section('page-name')
<h1> This is home page</h1>
    
@endsection


@section('default-content')
        @parent

<h1>This is  home page  text</h1>
    
@endsection
