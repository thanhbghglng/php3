@extends('layout.master')
@section('title','Category Page')
@section('content-title','Edit Category');
@section('content')
<form action="{{route('categories.update',$categoryEdit->id)}}" class="form" method="POST">
   @method('PUT')
    {{-- bat buoc trong form phai co token = @csrf --}}
    @csrf
    <div class="form-group">
        <p>{{$categoryEdit}}</p>
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id='name' value="{{$categoryEdit->name}}" >
    </div>
    <div class="form-group">
        <label for="name">Description</label>
        <input type="text" name="description" class="form-control" id='description'value="{{$categoryEdit->description}}" >
    </div>
   
    <div class="form-group">
        <input type="radio" name="status"   id="status" value="1" {{$categoryEdit->status== 1 ?'checked':''}}  >
        <label for="status">Active</label>

    </div>
    <div class="form-group">
        <input type="radio" name="status"   id="status" value="0"  {{$categoryEdit->status== 0 ?'checked':''}}>
        <label for="status">Deactive</label>

    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{route('categories.index')}}" class="btn btn-warning">Cancel</a>
    </div>
</form>
@endsection