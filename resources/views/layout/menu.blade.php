<div>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">EduWorlD</a>
            </div>
        
    <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('homepage')}}">Home</a></li>
        <li><a href="{{route('about')}}">About Us</a></li>
        <li><a href="{{route('course')}}">Course</a></li>
        <li><a href="{{route('controlPanel')}}">Control Panel</a></li>
        <li><a href="{{route('contact')}}">Contact Us</a></li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('logIn')}}"><span class="glyphicon glyphicon-user"></span> Log In</a></li>
        {{-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> --}}
    </ul>
</div>

</div>