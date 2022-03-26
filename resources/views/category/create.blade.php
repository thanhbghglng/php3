@extends('layout.master')
@section('title',isset($category)?'Update Category Page':'Create Category Page')
@section ('content-title',isset($category)?'Update Category':'Create Category')
@section('content')
    <form action="{{isset($category)? route('categories.update',$category->id) : route('categories.store')}}" class="form" method="POST">
        {{-- bat buoc trong form phai co token = @csrf --}}
        @csrf
        @if (isset($category))
            @method('PUT')
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id='name' value="{{isset($category) ? $category->name :''}}"  >
        </div>
        <div class="form-group">
            <label for="name">Description</label>
            <input type="text" name="description" class="form-control" id='description' value="{{isset($category) ? $category->description :''}}" >
        </div>
       
        <div class="form-group">
            <input type="radio" name="status"   id="status" value="1" {{isset($category) && $category->status == 1 ? 'checked' : ''}}  >
            <label for="status">Active</label>

        </div>
        <div class="form-group">
            <input type="radio" name="status"   id="status" value="0" {{isset($category) && $category->status == 0 ? 'checked':'' }} >
            <label for="status">Deactive</label>

        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">{{isset($category)?'Update':'Create'}}</button>
            <a href="{{route('categories.index')}}" class="btn btn-warning">Cancel</a>
        </div>
    </form>
@endsection