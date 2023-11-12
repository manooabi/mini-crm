
@extends('layouts.master')

@section('title','Edit Post')
@section('content')
<div class="container-fluid px-4">

<div class="card mt-4">

    <div class="card-header">
         <h4>Edit Posts
            <a href="{{ url('admin/employees')}}" class="btn btn-danger btn-sm float-end">Back</a>
        </h4> 
    </div>
    <div class="card-body">
        
@if($errors -> any())
        <div class="alert alert-danger">
        @foreach($errors -> all() as $error)
        <div>{{$error}}</div>
        @endforeach
        </div>
        @endif
    <form action="{{ url('admin/update-employee/'.$employee -> id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="">Category</label>
            <select name="company_id" required class="form-control">
                <option value="">--Select Company--</option>
                @foreach($company as $compitem)
                    <option value="{{ $compitem -> id}}" {{$employee -> company_id == $compitem -> id ? 'selected' : '' }}>
                        {{ $compitem -> name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">First Name</label>
            <input type="text" name="firstname" value="{{$employee->firstname}}" class="form-control"/>
        </div>
        <div class="mb-3">
            <label for="">Last Name</label>
            <input type="text" name="lastname" value="{{$employee->lastname}}" class="form-control"/>
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="text" name="email" value="{{$employee->email}}" class="form-control"/>
        </div>
        <div class="mb-3">
            <label for="">Phone</label>
            <input type="text" name="phone" value="{{$employee->phone}}" class="form-control"/>
        </div>
        <div class="row">
            <div class="mb-3">
                   <button type="submit" class="btn btn-primary float-end">Update post</button>
                </div>
        </div>
    </form>
    </div>
</div>
</div>

@endsection
