@extends('layouts.app')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 style="color:green;position:relative;left:25%;position:relative;left:54%;">Account For Last Registered Student</h2>

        </div>

        <div class="pull-right">

            <a style="color:white;background-color:brown;opacity:0.8;position:relative;left:-300%;" class="btn btn-primary" href="/admin" target="_parent">Close</a>

        </div>

    </div>
    
 

</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

   

<form action="{{ route('accounts.store') }}" method="POST">

    @csrf

  

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong style="position:relative;left:25%;">UserName:</strong>

                <input style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;" type="text" name="username" class="form-control" placeholder="Student's Registration Number" required>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong style="position:relative;left:25%;">PassWord:</strong>

                <input style="color:white;background-color:black;opacity:0.8;position:relative;left:25%;width:50%;" type="password" class="form-control" name="password" placeholder="Student's Registration Number" required>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

    <strong style="position:relative;left:25%;">Title:</strong>

    <input style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;" type="text" class="form-control" name="title" value="student" readonly="student" required>

</div>

</div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button style="color:white;background-color:brown;opacity:0.8;" type="submit" class="btn btn-primary">Create</button>

        </div>

    </div>

   

</form>

@endsection