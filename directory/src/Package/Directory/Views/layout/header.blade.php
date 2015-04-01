<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
  	<div class="container">
    	<div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::to('/') }}">Directory Listing</a>
    	</div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          	<li class="active"><a href=" {{ URL::to('/') }} ">Home</a></li>
            <li><a href=" {{ URL::to('/about') }} ">About</a></li> 
          	<li class="dropdown">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Business Directory <b class="caret"></b></a> 
            	<ul class="dropdown-menu"> 
		            <li><a href="{{ URL::to('/') }}">Business</a></li>
		            <li><a href="{{ URL::to('/category') }}">Business Categories</a></li>
            	</ul>
            </li> 
          </ul>
        </div><!-- /.nav-collapse -->
  	</div><!-- /.container -->
</div><!-- /.navbar -->
		