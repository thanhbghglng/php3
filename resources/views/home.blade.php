{{-- home se ke thua view cua master --}}
@extends('layout.master')

{{--  section se thay doi phan yield trong master voi ten tuong ung --}}
@section('title','Home Page Admin LTE')
@section('content-title','Dash Board')
@section('content')
<table class="table table-hover">
    <thead>
        <th>Tên</th>
        <th>Tuổi</th>
        <th>Lớp</th>
        <th>MSSV</th>
        <th>Ảnh đại diện</th>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{$student['name']}}</td>
                <td>{{$student['age']}}</td>
                <td>{{$student['class']}}</td>
                <td>{{$student['id']}}</td>
                <td><img src="" alt=""></td>
            </tr>
        @endforeach
    
        
       
    </tbody>
</table>
@endsection
    





