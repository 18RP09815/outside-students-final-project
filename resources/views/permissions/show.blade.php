@extends('layouts.app')
@section('content')
    <div class="row" style="position:relative;left:30%;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color:green"> Show Permission</h2>
            </div>
            <div class="pull-right">
                <a style="color:white;background-color:brown;opacity:0.8;position:relative;left:-900%;" class="btn btn-primary" href="/admin" target="_parent"> Close</a>
            </div>
        </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No:</strong>
                {{ $permission->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Registration_Number:</strong>
                {{ $permission->registration_number }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>LandLord_Names:</strong>
                {{ $permission->landlord_names }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>LandLord_Phone_Number:</strong>
                {{ $permission->landlord_phone_number }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>LandLord_ID_Number:</strong>
                {{ $permission->landlord_ID_number }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                {{ $permission->gender }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Current_Village:</strong>
                {{ $permission->current_village }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Current_Cell:</strong>
                {{ $permission->current_cell }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Current_Sector:</strong>
                {{ $permission->current_sector }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Academic_Year:</strong>
                {{ $permission->academic_year }}
            </div>
        </div>
       
    </div>
@endsection
