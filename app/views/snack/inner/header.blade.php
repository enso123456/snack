<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header"> 
      <a class="navbar-brand" href="#">Project Snack</a>
    </div>
     @if( Session::has('id'))
      <ul class="nav navbar-nav">
        <li class=""><a href="{{ URL::to('/profile') }}">Home</a></li>
        <li class=""><a href="{{ URL::to('/my-friend') }}">My Friends</a></li> 
        <li class=""><a href="{{ URL::to('/find-friend') }}">Add Friends</a></li>  
      </ul>
      <div id="navbar" class="navbar-collapse collapse navbar-form navbar-right"> 
        <a href="{{ URL::to('do-logout')}}" class="btn btn-warning"> Logout </a> 
      </div><!--/.navbar-collapse -->
    @endif
  </div>
</nav>