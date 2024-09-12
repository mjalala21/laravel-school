
@extends('layout.master')
@section('content')
<div class="col-md-12">
<h1>
    List of Students
</h1>

<div class="col-md-12">
@if(session()->has('message'))
<br><br>
<span class="alert alert-success mt-2 mb-1">

{{session()->get('message')}}
</span>
<br><br>
@endif
</div>
</div>
<p></p>
<div class="col-md-12">
<a class="btn btn-success" href="{{route('addStudents')}}">+Add Students</a>
</div>
<p></p>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Course Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->course_name}}</td>
            <td>{{$student->gender}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->date_of_birth}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('editStudent',['id'=>encrypt($student->studentId)])}}">Edit</a>
                <a class="btn btn-danger" href="{{route('deleteStudent')}}">Delete</a>
                <a class="btn btn-info" href="{{route('viewStudent')}}">View</a>
            </td>
           
          </tr>
          @endforeach
        </tbody>
      </table>

@endsection