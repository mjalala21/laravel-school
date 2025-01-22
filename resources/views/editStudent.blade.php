@extends('layout.master')
@section('content')
    <div>
        <h1>
            Edit Student
        </h1>

    </div>

    <div class="col-md-12">

        <a href=""> <img src="{{asset('images/profile.jpg')}}" 
          style="height:150x;width:150px" > </a>
      
      </div>


    <div>
        <div class="container col-md-6">

            <form action="{{route('updateStudent')}}" method="POST">
                @csrf
                <input type="hidden" name="studentId" value="{{encrypt($student->studentId)}}">
                <div class="form-group">
                    <label><b>Name:</b></label>
                    <br>
                    <input type="text" class="form-control" id="" placeholder="Enter email" name="name"
                        value="{{$student->name}}">
                </div>
                <br>
                <div class="form-group">
                    <label><b>Course Name:</b></label>
                    <br>
                    <input type="text" class="form-control" id="" placeholder="Enter Course Name" name="cname"
                        value="{{$student->course_name}}">
                </div>
                <br>
                <div class="form-group">
                    <label><b>Gender:</b></label>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender"
                            @if ($student->gender == 'male') checked @endif value="male">
                        Male
                        <p></p>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender"
                            @if ($student->gender == 'female') checked @endif value="female">
                        Female

                    </div>


                    <div class="form-group">
                        <label><b>Address:</b></label>
                        <p></p>
                        <input type="textextra" class="form-control" id="" placeholder="Enter Address"
                            name="address" value="{{$student->address}}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label><b>Email:</b></label>
                        <br>
                        <input type="email" class="form-control" id="" placeholder="Enter Email" name="email"
                            value="{{$student->email}}">
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="">Date Of Birth</label>
                        <input type="date" class="form-control" id="" placeholder="Enter Date of Birth"
                            name="date_of_birth" value="{{$student->date_of_birth}}">
                    </div>
                   

                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        </body>

        </html>

    </div>
@endsection
