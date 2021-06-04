@extends('layouts.app')
@section('content')

<div class="row" style="position:absolute;left:2%;width:100%;">

<div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="color:green;">OutSide Students' List</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="/admin" style="color:white;background-color:brown;position:relative;left:0%;"> Close</a>

        </div>

 
    
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
   
    <table class="table table-bordered">
        <tr style="color:white;background-color:brown;opacity:0.8;">
            
        <th>No</th>
        <th>Reg_No</th>
            <th>LandlordName</th>
            <th>LandlordPhone</th>
            <th>LandlordID</th>
            <th>Gender</th>
            <th>Village</th>
            <th>Cell</th>
            <th>Sector</th>
            <th>AcademicYear</th>
            
            <th>Action</th>
        </tr>
        @foreach ($permissions as $permission)
        <tr>
            
        <td style="color:white;background-color:brown;opacity:0.8;">{{ $permission->id }}</td>
        <td>{{ $permission->registration_number }}</td>
        <td>{{ $permission->landlord_names }}</td>
        <td>{{ $permission->landlord_phone_number }}</td>
        <td>{{ $permission->landlord_ID_number }}</td>
        <td>{{ $permission->gender }}</td>
        <td>{{ $permission->current_village }}</td>
        <td>{{ $permission->current_cell }}</td>
        <td>{{ $permission->current_sector }}</td>
        <td>{{ $permission->academic_year }}</td>
    
            
            <td style="color:white;background-color:black;opacity:0.8;">
                <form action="{{ route('permissions.destroy',$permission->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('permissions.show',$permission->id) }}"  target="_parent"style="background-color:green;">View</a>
    
                    <a class="btn btn-primary" href="{{ route('permissions.edit',$permission->id) }}" target="_parent"style="background-color:blue;">Modify</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit"style="background-color:red;" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $permissions->links() !!}
      
@endsection
