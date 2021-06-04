@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color:green;position:relative;left:126%;">Edit Permission</h2>
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
  
    <form action="{{ route('permissions.update',$permission->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="position:relative;left:25%;">No:</strong>
                <input type="text" value="{{ $permission->id }}" style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;"  readonly="{{ $permission->id }}" name="id" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="position:relative;left:25%;">Registration_Number:</strong>
                <input type="text" style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;" value="{{ $permission->registration_number }}" name="registration_number" required  class="form-control" placeholder="registration_number">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="position:relative;left:25%;">LandLord_Names:</strong>
                <input style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;" type="text" class="form-control" value="{{ $permission->landlord_names }}" required  name="landlord_names" placeholder="landlord_names">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="position:relative;left:25%;">LandLord_Phone_Number:</strong>
                <input type="text" class="form-control" value="{{ $permission->landlord_phone_number }}" required  name="landlord_phone_number" placeholder="landlord_phone_number" style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;">
            </div>
        </div>

<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="position:relative;left:25%;">LandLord_ID_Number:</strong>
                <input type="text" class="form-control" value="{{ $permission->landlord_ID_number }}" required  name="landlord_ID_number" placeholder="landlord_ID_number" style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong style="position:relative;left:25%;">Gender:</strong>
                <select class="form-control" value="{{ $permission->gender }}" name="gender" required  placeholder="gender" style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;">
                <option>Male</option>
                <option>Female</option>
                </select></div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="position:relative;left:25%;">Current_Village:</strong>
                <input type="text" class="form-control" value="{{ $permission->current_village }}" style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;" required  name="current_village" placeholder="current_village">
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="position:relative;left:25%;">Current_Cell:</strong>
                <input type="text" class="form-control" style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;" value="{{ $permission->current_cell }}"  required name="current_cell" placeholder="current_cell">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="position:relative;left:25%;">Current_Sector:</strong>
                <input type="text" style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;" class="form-control" value="{{ $permission->current_sector }}" required  name="current_sector" placeholder="current_sector">
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="position:relative;left:25%;">Academic_Year:</strong>
                <input style="color:white;background-color:black;opacity:0.8;width:50%;position:relative;left:25%;" type="text" class="form-control" value="{{ $permission->academic_year }}" readonly="{{ $permission->academic_year }}" required name="academic_year" placeholder="academic_year">
            </div>
        </div>

     
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button  style="color:white;background-color:brown;opacity:0.8;" type="submit" class="btn btn-primary">Change</button>
            </div>
        </div>
   
    </form>
@endsection
