
@extends('layouts.master')

@section('admin-title')
	Home - page 
@endsection

@section('admin-content')
<div class="container mt-6">
       
       
            <div class="card card-primary">
             
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('auth/modules/MyWork/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
          
            <div class="form-group">
                <label for="before_image">before_image</label>
                <input type="file" class="form-control" id="before_image" placeholder="before_image" name="before_image">
                @if ($errors->has('before_image'))
                <span class="error">{{ $errors->first('before_image') }}</span>
            @endif
              </div>
          <div class="form-group">
            <label for="after_image">after_image</label>
            <input type="file" class="form-control" id="after_image" placeholder="after_image" name="after_image">
            @if ($errors->has('after_image'))
            <span class="error">{{ $errors->first('after_image') }}</span>
        @endif
          </div>
          <div class="form-group">
            <label for="image_caption">image_caption</label>
            <input type="text" class="form-control" id="image_caption" placeholder="image_caption" name="image_caption">
            @if ($errors->has('image_caption'))
            <span class="error">{{ $errors->first('image_caption') }}</span>
        @endif
          </div>
          <div class="form-group">
            <label for="image_description">image_description</label>
            <input type="text" class="form-control" id="image_description" placeholder="image_description" name="image_description">
            @if ($errors->has('image_description'))
            <span class="error">{{ $errors->first('image_description') }}</span>
        @endif
          </div>
        </div>
        <!-- /.card-body -->
    
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
@endsection

