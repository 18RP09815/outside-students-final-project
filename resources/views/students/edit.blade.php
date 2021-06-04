@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color:green;position:relative;left:103%;">Edit Students' Data</h2>
            </div>
            <div class="pull-right">
                <a style="color:white;background-color:brown;opacity:0.8;position:relative;left:-380%;" class="btn btn-primary" href="/admin" target="_parent">Close</a>
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
  
    <form action="{{ route('students.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         
     <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="position:relative;left:25%;">No:</strong>
                <input style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;" type="text" value="{{ $student->id }}"  readonly="{{ $student->id }}" name="id" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="position:relative;left:25%;">Registration_Number:</strong>
                <input style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;" type="text" value="{{ $student->registration_number }}" name="registration_number" required class="form-control" placeholder="registration_number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="position:relative;left:25%;">ID_Number:</strong>
                <input type="text" class="form-control" style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;" value="{{ $student->ID_number }}" required name="ID_number" placeholder="ID_number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="position:relative;left:25%;">First_Name:</strong>
                <input style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;" type="text" value="{{ $student->first_name }}" class="form-control" required name="first_name" placeholder="first_name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="position:relative;left:25%;">Last_Name:</strong>
                <input type="text" style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;" value="{{ $student->last_name }}" class="form-control" required name="last_name" placeholder="last_name">
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="position:relative;left:25%;">Phone_Number:</strong>
                <input style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;" type="text" value="{{ $student->phone_number }}" class="form-control" required name="phone_number" placeholder="phone_number">
            </div>
        </div>

      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="position:relative;left:25%;">Gender:</strong>
                <select style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;" class="form-control" required name="gender" placeholder="gender">
                <option> {{ $student->gender }}</option>
                <option>Male</option>
                <option>Female</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="position:relative;left:25%;">Department:</strong>
                <select class="form-control" required name="department" style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;" placeholder="department">
                <option> {{ $student->department }}</option>
                <option>IT</option>
                <option>ET</option>
                <option>RE</option>
                </select>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="position:relative;left:25%;">Level:</strong>
                <select style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;" class="form-control" required name="level" placeholder="level">
                <option> {{ $student->level }}</option>
                <option>6</option>
                <option>2</option>
                <option>3</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="position:relative;left:25%;">Class:</strong>
                <input type="text" value="{{ $student->class }}" style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;" class="form-control" required name="class" placeholder="class">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
                <strong style="position:relative;left:25%;">Academic_Year:</strong>
                <input style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;" type="text" value="<?php echo date('Y');?>"  readonly="<?php echo date('Y');?>" name="academic_year" class="form-control">
            </div>
        </div>
 
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button  style="color:white;background-color:brown;opacity:0.8;" type="submit" class="btn btn-primary">Change</button>
            </div>
        </div>
    </form>
@endsection
