
@extends('layout.master')
@section('content')
<div>
    <h1>
        Add Student
    </h1>

</div>
<div class="col-md-12">

  <a href=""> <img src="{{asset('images/profile.jpg')}}" 
    style="height:150x;width:150px" > </a>

</div>

<div>
    <div class="container col-md-6">
        
        <form action="{{route('saveStudent')}}" method="post">
          @csrf
          <div class="form-group">
            <label><b>Name:</b></label>
            <br>
            <input type="text" class="form-control" id="" placeholder="Enter email" name="name">
          </div>
          <br>
          <div class="form-group">
            <label><b>Course Name:</b></label>
            <br>
            <input type="text" class="form-control" id="" placeholder="Enter Course Name" name="cname">
          </div>
          <br>
          <div class="form-group">
            <label><b>Gender:</b></label>
            <br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" value="Male">
                Male
            <p></p>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" value="Female">
                Female
          
            </div>


          <div class="form-group">
            <label><b>Address:</b></label>
            <p></p>
            <input type="textextra" class="form-control" id="" placeholder="Enter Address" name="address">
          </div>
          <br>
          <div class="form-group">
            <label><b>Email:</b></label>
            <br>
            <input type="email" class="form-control" id="" placeholder="Enter Email" name="email">
          </div>
          <br>
          <div class="form-group">
            <label><b>Date Of Birth:</b></label>
            <br>
            <input type="date" class="form-control" id="" placeholder="Enter Date of Birth" name="date_of_birth" >
          </div>
          
         <br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      
      </body>
      </html>
      
</div>
@endsection