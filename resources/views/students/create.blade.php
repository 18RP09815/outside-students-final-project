@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        <font color="green"><h2>Register A New Student</h2></font>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" style="background-color:brown;" href="/admin" target="_parent"> Close</a>
        </div>
    </div>
    
</div>
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}
         </p>
        </div>
    @endif
   
   
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
   
<form action="{{ route('students.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Registration_Number:</strong>
                <input type="text" style="color:white;background-color:black;opacity:0.8;" name="registration_number" required class="form-control" placeholder="registration_number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student_ID_Number:</strong>
                <input style="color:white;background-color:black;opacity:0.8;" type="text" class="form-control" required name="ID_number" placeholder="ID_number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First_Name:</strong>
                <input style="color:white;background-color:black;opacity:0.8;" type="text" class="form-control" required name="first_name" placeholder="first_name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last_Name:</strong>
                <input style="color:white;background-color:black;opacity:0.8;" type="text" class="form-control" required name="last_name" placeholder="last_name">
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone_Number:</strong>
                <input style="color:white;background-color:black;opacity:0.8;" type="text" class="form-control" required name="phone_number" placeholder="phone_number">
            </div>
        </div>

      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                <select style="color:white;background-color:black;opacity:0.8;" class="form-control" required name="gender" placeholder="gender">
                <option>Male</option>
                <option>Female</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Department:</strong>
                <select style="color:white;background-color:black;opacity:0.8;" class="form-control" required name="department" placeholder="department">
                <option>IT</option>
                <option>ET</option>
                <option>RE</option>
                </select>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Level:</strong>
                <select style="color:white;background-color:black;opacity:0.8;" class="form-control" required name="level" placeholder="level">
                <option>6</option>
                <option>2</option>
                <option>3</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Class:</strong>
                <input style="color:white;background-color:black;opacity:0.8;" type="text" class="form-control" required name="class" placeholder="class">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Academic_year:</strong>
                <input style="color:white;background-color:black;opacity:0.8;" type="text" class="form-control" value="<?php echo date('Y');?>" readonly="<?php echo date('Y');?>" required name="academic_year" placeholder="academic_year">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" style="background-color:brown;" class="btn btn-primary">Register</button>
        </div>
    </div>
   
</form>
@endsection
