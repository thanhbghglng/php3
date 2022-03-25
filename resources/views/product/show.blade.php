@extends('layout.master')
@section('title','Product Page')
@section('content-title','Products Detail')
@section('content')
    
    @foreach ($productDetail as $productDetails)
                <p> {{$productDetails->id}} </p>
                <p> {{$productDetails->name}} </p>
                {{-- <p> {{$productDetails->description}} </p>
                <p> {{$productDetails->short_description}} </p>
                <p> {{$productDetails->price}} </p>
                <p> {{$productDetails->quantity}} </p>
                <p> {{$productDetails->thumbnail_url}} </p>
                <p> {{$productDetails->created_at}} </p>
                <p> {{$productDetails->updated_at}} </p> --}}
    @endforeach
@endsection