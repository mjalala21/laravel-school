@extends('layout.master')
@section('content')
    <div>
        <h1>
            Add Student
        </h1>

    </div>
    <div class="col-md-12">

        <a href=""> <img src="{{ asset('images/profile.jpg') }}" style="height:150x;width:150px"> </a>

    </div>

    <div>
        <div class="container col-md-6">

            <form action="{{ route('saveStudent') }}" method="post">
                @csrf
                <div class="form-group">
                    <label><b>Name:</b></label>
                    <br>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id=""
                        placeholder="Enter name" name="name">
                    @error('name')
                        <span class='alert-danger'>
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <label><b>Course Name:</b></label>
                    <br>
                    <input type="text" class="form-control  @error('cname') is-invalid @enderror" id=""
                        placeholder="Enter Course Name" name="cname">

                </div>
                <br>
                <div class="form-group">
                    <label><b>Gender:</b></label>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input  @error('gender') is-invalid @enderror" type="radio" name="gender"
                            value="male">
                        male
                        <p></p>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input  @error('gender') is-invalid @enderror" type="radio" name="gender"
                            value="female">
                        female

                    </div>


                    <div class="form-group">
                        <label><b>Address:</b></label>
                        <p></p>
                        <input type="textextra" class="form-control  @error('address') is-invalid @enderror" id=""
                            placeholder="Enter Address" name="address">
                    </div>
                    <br>
                    <div class="form-group">
                        <label><b>Email:</b></label>
                        <br>
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" id=""
                            placeholder="Enter Email" name="email">
                    </div>
                    <br>
                    <div class="form-group">
                        <label><b>Date Of Birth:</b></label>
                        <br>
                        <input type="date" class="form-control  @error('dob') is-invalid @enderror" id=""
                            placeholder="Enter Date of Birth" name="dob">
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        </body>

        </html>

    </div>
@endsection
