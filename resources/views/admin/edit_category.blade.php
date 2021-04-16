@extends('layouts.admin')

@section('content')
    <form action="{{ URL::to('admin/update-category/' .$category_edit->category_slug ) }}" method="POST">
        {{ csrf_field() }}
        <div class="col-sm-6 py-2">
            <a href="{{ URL::to('admin/category') }}">Back to category</a>
        </div>
        <div class="form-group col-sm-6">
            <label for="exampleInputEmail1">Category name: </label>
            <input name="category_name" type="text" class="form-control" 
            id="exampleInputEmail1" placeholder="Category name" value="{{ $category_edit->category_name }}">
        </div>
        <div class="col-sm-6">
            <button type="submit" class="btn btn-primary">Edit category</button>
            <span class="text-primary"> {{ session('success')}} </span>
        </div>
    </form>
    </br></br>

@endsection