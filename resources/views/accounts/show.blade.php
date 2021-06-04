@extends('layouts.app')
@section('content')
    <div class="row" style="position:relative;left:30%;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color:green;"> Show Student Account</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" style="color:white;background-color:brown;opacity:0.8;position:relative;left:-900%;" href="/admin" target="_parent"> Close</a>
            </div>
        </div>
    
   
   
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No:</strong>
                {{ $account->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>UserName:</strong>
                {{ $account->username }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                {{ $account->password }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $account->title }}
            </div>
        </div>
    
    </div>
@endsection
