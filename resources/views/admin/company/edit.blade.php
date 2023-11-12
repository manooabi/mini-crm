@extends('layouts.master')

@section('title','Company')
@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
        <h4 class=""> Edit Company</h1>
        </div>
        <div class="card-body">

        @if($errors -> any())
        <div class="alert alert-danger">
        @foreach($errors -> all() as $error)
        <div>{{$error}}</div>
        @endforeach
        </div>
        @endif
            <form action="{{url('admin/update-company/' .$company -> id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label >Company Name</label>
                    <input type="text" name="name" value="{{$company -> name}}" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label >Email</label>
                    <input type="text" name="email" value="{{$company -> email}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label >Logo</label>
                    <input type="file" name="logo" class="form-control">
                </div>
                <div class="mb-3">
                    <label >Website</label>
                    <input type="text" name="website" value="{{$company -> website}}" class="form-control">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Update Company</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection