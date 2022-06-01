@extends('template.master')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Create Article</h1>
         
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
          <form class="mb-4" method="POST" action="/articles/create" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
              <label for="">Category Name</label>
              <select name="category_id" id="" class="form-control">
                @foreach ($category as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
              </select>
            
            </div>
            <div class="form-group">
              <label for="">Title</label>
              <input  type="text" class="form-control" name="title">
             
            </div>
            <div class="form-group">
              <label for="">Content</label>
              <textarea  type="text" class="form-control" name="content"></textarea>
            
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input  type="file" class="form-control" name="image">
              
            </div>
            <button type="submit" id="btn-submit" class="btn btn-primary ">Create Data</button>
        </form>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
@endsection