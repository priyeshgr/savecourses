@extends('layouts.master')
@section('content')
<div class="header_status">
        <span class="title-header">Course Details</span>
        <span class="menu-list">
        <a href="/view">View Saved</a>
        </span>
    </div>
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>Course_ID</th>
                <th>Course_Name</th>
                <th>Course_Type</th>
                <th>Course_Save</th>
            </tr>
        </thead>
        <tbody>
            @foreach($couArr as $key => $course)
            <tr>
                <td id="couid{{$key}}">{{ $course->id }}</td>
                <td id="couName{{$key}}">{{ $course->name }}</td>
                <td id="couType{{$key}}">{{ $course->courseType }}</td>
                <td><button onclick="savethedata({{$key}})" id="buttondata" value="{{$key}}"><i class="fas fa-save"></i></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
   
@endsection('content')
