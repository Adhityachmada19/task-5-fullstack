@extends('template.master')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Category</h1>
          <a href="/categories/create/template" class="btn btn-primary btn-sm">
            <p>Create Categories</p>
           </a>
        </div>
        
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Category Name</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $category)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->user->name}}</td>
                    <td>
                      <form action="/categories/delete/{{$category->id}}"method="POSt">
                        <a href="/categories/edit/{{$category->id}}" class="btn btn-warning btn-sm">
                         <p>Edit</p>
                        </a>
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">
                        <p>Delete</p>
                    </button>
                    
                </form>
                    </td>
                  </tr>      
                @endforeach
              
            </tbody>
          </table>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
@endsection