@extends('layout.master')
@section('content')
<h1>
    Register
</h1>

            <hr>
        <form>
            <label for="sname"><b>Name</b></label>
            <input type="text" placeholder="Enter student's Name" name="sname" id="sname" required><br><br>
            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="Enter username" name="uname" id="uname" required><br><br>
            <label for="pwd"><b>password</b></label>
            <input type="text" placeholder="Enter Passwod" name="pwd" id="pwd" required><br><br>
        
            <label for="cname"><b>Name of Course:</b></label>
            <input type="text" placeholder="Enter Course's Name" name="cname" id="cname" required><br><br>
            
            <label for="phone"><b>Phone Number:</b></label>
            <input type="text" placeholder="Enter Phone Number" name="phone" id="phone" required><br><br>
            
            <hr>
        
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <button type="submit" class="registerbtn">Register</button>
          </div>
        
          <div class="container signin">
            <p>Already have an account? <a href="{{route('login')}}" style="color:blue">Login</a>.</p>
          </div>
        </form>
        
        @endsection