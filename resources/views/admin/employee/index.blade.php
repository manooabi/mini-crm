@extends('layouts.master')

@section('title','Add Employee')
@section('content')
<div class="container-fluid px-4">

<div class="card mt-4">
    <div class="card-header">
         <h4>View Posts
            <a href="{{ url('admin/add-employee')}}" class="btn btn-primary btn-sm float-end">Add Posts</a>
        </h4> 
    </div>
    <div class="card-body">

    @if(session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
    
        <table id="myDataTable" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last  Name</th>
                <th>Company Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $item) 
            <tr>
                <td>{{$item -> id}}</td>
                <td>{{$item -> firstname}}</td>
                <td>{{$item -> lastname}}</td>
                <td>{{$item -> company-> name}}</td>
                <td>{{$item -> email}}</td>
                <td>{{$item -> phone}}</td>
                <td>
                    <a href="{{ url('admin/employee/'.$item -> id)}}" class="btn btn-success">Edit</a>
                </td>
                <td>
                    <a href="{{ url('admin/delete-employee/'.$item -> id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        
    </div>
</div>
</div>

@endsection
