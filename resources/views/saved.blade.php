@extends('layouts.master')
@section('content')
<div class="header_status">
    <span class="title-header">Saved Courses</span>
        <span class="menu-list">
        <a href="/">Home</a>
        </span>
    </div>
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>Course_ID</th>
                <th>Course_Name</th>
                <th>Course_Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $key => $course)
            <tr>
                <td >{{ $course->Course_ID }}</td>
                <td >{{ $course->Course_Name }}</td>
                <td >{{ $course->Course_Type }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
   
@endsection('content')
