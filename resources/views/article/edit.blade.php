@extends('template.master')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Category</h1>
         
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
          <form class="mb-4" method="POST" action="/articles/update/{{$article->id}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
              <label for="">Category Name</label>
              <select name="category_id" id="" class="form-control">
                <option value="{{$article->category_id}}">{{$article->category->name}}</option>
              </select>
             
          </div>
            <div class="form-group">
                <label for="">Title</label>
                <input  type="text" class="form-control" name="title" value="{{$article->title}}">
               
            </div>
            <div class="form-group">
              <label for="">Content</label>
              <input  type="text" class="form-control" name="content" value="{{$article->content}}">
             
          </div>
          <div class="form-group">
            <label for="">Image</label>
            <input  type="file" class="form-control" name="image" >
           
          </div>
            <button type="submit" id="btn-submit" class="btn btn-primary ">Edit Data</button>
        </form>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
@endsection