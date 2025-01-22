@extends('layout.master')
@section('content')
<h1>
    Login
</h1>

    
    <div class="bg-img pt-5">
    <form class="form-horizontal container" action="{{route('')}}" >
      <div class="form-group">
        <label class="control-label col-sm-2" for="uname">Username:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="uname" placeholder="Enter username" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Password:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" name="pwd" placeholder="Enter password" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
          </div>
    </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="Login" class="btn">Submit</button>
        </div>
      </div>
    
    </form>
    
    @endsection
  