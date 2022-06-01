@extends('template.master')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Create Category</h1>
         
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
          <form class="mb-4" method="POST" action="/categories/create">
            @csrf
            <div class="form-group">
                <label for="">Name Categories</label>
                <input  type="text" class="form-control" name="name">
               
            </div>
            <button type="submit" id="btn-submit" class="btn btn-primary ">Create Data</button>
        </form>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
@endsection