@extends('layouts.master')

@section('title','Company')
@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
        <h4 class=""> Add Company</h1>
        </div>
        <div class="card-body">

        @if($errors -> any())
        <div class="alert alert-danger">
        @foreach($errors -> all() as $error)
        <div>{{$error}}</div>
        @endforeach
        </div>
        @endif
            <form action="{{url('admin/add-company')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label >Company Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label >Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label >Logo</label>
                    <input type="file" name="logo" required class="form-control">
                </div>
                <div class="mb-3">
                    <label >Website</label>
                    <input type="text" name="website" class="form-control">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Save Company</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection