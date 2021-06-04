
@extends('layouts.app')

 

@section('content')

    <div class="row">
    
              

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2 style="color:green;">Students' Accounts</h2>

            </div>

            <div class="pull-right">
            <a class="btn btn-primary" style="color:white;background-color:brown;" href="/admin" target="_parent">Close</a>

        
            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}    
</div>
</p>
       

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr style="color:white;background-color:brown;opacity:0.8;">

            <th>No</th>

            <th>UserName</th>

            <th>PassWord</th>
            <th>Title</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($accounts as $account)

        <tr>

           

        <td style="color:white;background-color:brown;opacity:0.8;">{{ $account->id }}</td>
        <td>{{ $account->username }}</td>
        <td>{{ $account->password }}</td>

            <td>{{ $account->title }}</td>

            <td style="color:white;background-color:black;opacity:0.9;">

                <form action="{{ route('accounts.destroy',$account->id) }}" method="POST">

   

                    <a class="btn btn-info" style="background-color:green;" href="{{ route('accounts.show',$account->id) }}">View</a>

    

                    <a class="btn btn-primary" style="background-color:blue;" href="{{ route('accounts.edit',$account->id) }}">Modify</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" style="background-color:red;" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>


  

    {!! $accounts->links() !!}

      

@endsection