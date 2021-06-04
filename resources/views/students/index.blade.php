@extends('layouts.app')
@section('content')

<div class="row">

<div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="color:green">All Students' List</h2>

        </div>

        <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('accounts.create') }}" target="_parent" style="background-color:Green;">GiveHim/Her_LoginAccount?</a>
            
            <a style="color:white;background-color:brown;opacity:0.8;" class="btn btn-primary" href="/admin"> Close</a>

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
            <th>NID_No</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>PhoneNo</th>
            <th>Gender</th>
            <th>Department</th>
            <th>Level</th>
            <th>Class</th>
            <th>AcademicYear</th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            
        <td style="color:white;background-color:brown;opacity:0.8;">{{ $student->id }}</td>
        <td>{{ $student->registration_number }}</td>
        <td>{{ $student->ID_number }}</td>
        <td>{{ $student->first_name }}</td>
        <td>{{ $student->last_name }}</td>
        <td>{{ $student->phone_number }}</td>
        <td>{{ $student->gender }}</td>
        <td>{{ $student->department }}</td>
        <td>{{ $student->level }}</td>
        <td>{{ $student->class }}</td>
        <td>{{ $student->academic_year }}</td>
    
        
            <td style="color:white;background-color:black;opacity:0.8;">
                <form action="{{ route('students.destroy',$student->id) }}" method="POST">
   
                    <a class="btn btn-info"style="background-color:green;" href="{{ route('students.show',$student->id) }}" target="_parent">View</a>
    
                    <a class="btn btn-primary"style="background-color:blue;" href="{{ route('students.edit',$student->id) }}" target="_parent">Modify</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit"style="background-color:red;" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $students->links() !!}
      
@endsection
