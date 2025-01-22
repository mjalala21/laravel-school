
<nav class="section-container nav-container">
    <div class="nav-logo">Edu<span>WorlD</span>
        <ul class="nav-links">
            <li><a href="{{route('homepage')}}"  class="nav-link">Home</a></li>
            <li><a href="{{route('about')}}"  class="nav-link">About Us</a></li>
            <li><a href="{{route('course')}} " class="nav-link">Course</a></li>
            <li><a href="{{route('controlPanel')}}"  class="nav-link">Control Panel</a></li>
            <li><a href="{{route('contact')}}"  class="nav-link">Contact Us</a></li>
         </ul>
    </div>


<div 
{{-- style="float:right;list-style: none;text-decoration: none;overflow: hidden;"> --}}
    
    <ul class="nav navbar-nav">
        <li><a href="{{route('login')}}" style="text-align:center" class="fa fa-fw fa-user"></a></li>
        {{-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> --}}
    </ul>
</div>
</nav>
