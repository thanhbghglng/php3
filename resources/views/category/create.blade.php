@extends('layout.master')
@section('title','Crate New Category')
@section ('content-title','Create Category')
@section('content')
    <form action="{{route('categories.store')}}" class="form" method="POST">
        {{-- bat buoc trong form phai co token = @csrf --}}
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id='name' >
        </div>
        <div class="form-group">
            <label for="name">Description</label>
            <input type="text" name="description" class="form-control" id='description' >
        </div>
       
        <div class="form-group">
            <input type="radio" name="status"   id="status" value="1" >
            <label for="status">Active</label>

        </div>
        <div class="form-group">
            <input type="radio" name="status"   id="status" value="0" >
            <label for="status">Deactive</label>

        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{route('categories.index')}}" class="btn btn-warning">Cancel</a>
        </div>
    </form>
@endsection