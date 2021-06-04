@extends('layouts.app')
@section('content')
<fieldset>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <font color="green"><h2>Declare Your OutSide Permission</h2></font>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" style="background-color:brown;" href="/student" target="_parent"><font size="3">x</font></a>
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
   
<form action="{{ route('permissions.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Registration_Number:</strong>
                <input type="text" name="registration_number" style="color:white;background-color:black;opacity:0.8;" required class="form-control" placeholder="registration_number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>LandLord_Names:</strong>
                <input type="text" class="form-control" required name="landlord_names" placeholder="landlord_names" style="color:white;background-color:black;opacity:0.8;">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>LandLord_Phone_Number:</strong>
                <input type="text" class="form-control" required name="landlord_phone_number" placeholder="landlord_phone_number" style="color:white;background-color:black;opacity:0.8;">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>LandLord_ID_Number:</strong>
                <input type="text" class="form-control" required name="landlord_ID_number" placeholder="landlord_ID_number" style="color:white;background-color:black;opacity:0.8;">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                <select class="form-control" required name="gender" placeholder="gender" style="color:white;background-color:black;opacity:0.8;">
                <option>Male</option>
                <option>Female</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Current_Village:</strong>
                <input type="text" class="form-control" style="color:white;background-color:black;opacity:0.8;" required name="current_village" placeholder="current_village">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Current_Cell:</strong>
                <input type="text" class="form-control" style="color:white;background-color:black;opacity:0.8;" required name="current_cell" placeholder="current_cell">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Current_Sector:</strong>
                <input type="text" style="color:white;background-color:black;opacity:0.8;" class="form-control" required name="current_sector" placeholder="current_sector">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Academic_Year:</strong>
                <input type="text" style="color:white;background-color:black;opacity:0.8;" class="form-control" required name="academic_year" value="<?php echo date('Y');?>" readonly="<?php echo date('Y');?>" placeholder="academic_year">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" style="background-color:brown;">Declare</button>
        </div>
    </div>
   
</form>
</fieldset>
@endsection
