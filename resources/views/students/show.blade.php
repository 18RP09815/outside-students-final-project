@extends('layouts.app')
@section('content')
    <div class="row" style="position:relative;left:30%;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color:green;"> Show Student</h2>
            </div>
            <div class="pull-right">
                <a style="color:white;background-color:brown;opacity:0.8;position:relative;left:-900%;" class="btn btn-primary" href="/admin" target="_parent"> Close</a>
            </div>
        </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No:</strong>
                {{ $student->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Registration_Number:</strong>
                {{ $student->registration_number }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID_Number:</strong>
                {{ $student->ID_number}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First_Name:</strong>
                {{ $student->first_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last_Name:</strong>
                {{ $student->last_name }}
            </div>
            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nhone_Number:</strong>
                {{ $student->phone_number }}
            </div> 
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                {{ $student->gender }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Department:</strong>
                {{ $student->department }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Level:</strong>
                {{ $student->level }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Class:</strong>
                {{ $student->class }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Academic_Year:</strong>
                {{ $student->academic_year }}
            </div>
        </div>
       
    </div>
@endsection
