@extends('snack.inner_scaff')

@section('inner_content')
	<div class="container"> 
      	<h2 class="text-center">Add Friends</h2> 
      	<div class="row"> 
      		@foreach ($my_friends as $friend)  
	        <div class="col-md-3 text-center">
		        @if( $friend->profile == '')
		            {{ HTML::image('image/avatar.jpg','logo', array( 'class' => 'img-thumbnail','style' => '150px; height: 150px;' )) }}
		        @else
		            {{ HTML::image( '/image/'. $friend->profile,'logo', array( 'class' => 'img-thumbnail','style' => '150px; height: 150px;' )) }}
		        @endif
		        <h4>{{ $friend->firstname }} {{ $friend->lastname }}</h4>
		        <p><a class="btn btn-xs btn-info" href="{{ URL::to('/view-profile-friend') .'/'. $friend->id }}" role="button">View Profile &raquo;</a></p>
		        @if( Session::has('id'))
					 <p><a class="btn btn-xs btn-primary" href="{{ URL::to('/add-friend') .'/'. $friend->id}}" role="button">Add as Friend</a></p>
		        @endif 
	        </div>  
	        @endforeach   
    	</div> 
    	<hr> 
  		<footer>
        	<p>&copy; Snack Inc. 2015</p>
      	</footer>
    </div> <!-- /container --> 
@stop