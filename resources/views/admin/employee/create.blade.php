
@extends('layouts.master')

@section('title','View Employee')
@section('content')
<div class="container-fluid px-4">

<div class="card mt-4">

@if($errors -> any())
        <div class="alert alert-danger">
        @foreach($errors -> all() as $error)
        <div>{{$error}}</div>
        @endforeach
        </div>
        @endif
    <div class="card-header">
         <h4>Add Employee
            <a href="{{ url('admin/add-employee')}}" class="btn btn-primary btn-sm float-end">Add Employee</a>
        </h4> 
    </div>
    <div class="card-body">
    
    <form action="{{ url('admin/add-employee')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="">Company</label>
            <select name="company_id" class="form-control">
                @foreach($company as $compitem)
                    <option value="{{ $compitem -> id}}">{{ $compitem -> name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">First Name</label>
            <input type="text" name="firstname" class="form-control"/>
        </div>
        <div class="mb-3">
            <label for="">Last Name</label>
            <input type="text" name="lastname" class="form-control"/>
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control"/>
        </div>
        <div class="mb-3">
            <label for="">Phone</label>
            <input type="text" name="phone" class="form-control"/>
        </div>
        <div class="row">
         
            <div class="mb-3">
                   <button type="submit" class="btn btn-primary float-end">Save Employee</button>
                </div>
        </div>
    </form>
    </div>
</div>
</div>

@endsection
