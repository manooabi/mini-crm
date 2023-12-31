@extends('layouts.master')

@section('title','Company')
@section('content')

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="{{url('admin/delete-company')}}" method="POST">
        @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Company</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="company_delete_id" id="company_id">
        <h5>Are you sure You want to delete this Company?</h5>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Yes Delete</button>
      </div>
     </form>
    </div>
  </div>
</div>



<div class="container-fluid px-4">
 
<div class="card mt-4">
    <div class="card-header">

    <h4>View Company 
    <a href="{{ url('admin/add-company')}}" class="btn btn-primary btn-sm float-end">Add company</a>
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
            <th>Company Name</th>
            <th>Email</th>
            <th>Website</th>
            <th>Logo</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($company as $item)

      
        <tr>
            <td>{{$item -> id}}</td>
            <td>{{$item -> name}}</td>
            <td>{{$item -> email}}</td>
            <td>{{$item -> website}}</td>
            <td>
                <img src="{{ asset('storage/logo/company/'.$item -> logo)}}" width="50px" height="50px" alt="Img">
            </td>
            <td>
                <a href="{{url('admin/edit-company/' .$item -> id )}}" class="btn btn-success">Edit</a>
            </td>
            <td>
            <!-- <a href="{{url('admin/delete-category/' .$item -> id )}}" class="btn btn-danger">Delete</a> -->
            <button type="button" class="btn btn-danger deleteCategoryBtn" value="{{$item -> id}}">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
</div>

  
 
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function (){
       // $('.deleteCategoryBtn').click(function(e){

            $(document).on('click', '.deleteCategoryBtn',function(e){
        
           // });
            e.preventDefault();

          var company_id =  $(this).val();
          $('#company_id').val(company_id);
          $('#deleteModal').modal('show');
        });
    });
</script>
@endsection