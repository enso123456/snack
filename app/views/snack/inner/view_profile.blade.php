@extends('snack.inner_scaff')

@section('inner_content')
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container"> 
      <div class="profile">
        <div class="pull-left col-xs-2">
          @if($profile->profile == '')
            {{ HTML::image('image/avatar.jpg','logo', array( 'class' => 'img-thumbnail','style' => '150px; height: 150px;' )) }}
          @else
            {{ HTML::image( '/image/'. $profile->profile,'logo', array( 'class' => 'img-thumbnail','style' => '150px; height: 150px;' )) }}
          @endif
        </div>
        <div class="p-info col-xs-10">
          <div class="panel panel-default">
            <div class="panel-heading">
              <label>Profile</label>
            </div>
            <div class="panel-body">
              <form class="form-profile">
                <div class="form-group">
                  <label for="fulname">First name:</label> 
                  <input type="text" class="form-control" id="firstname" value="{{ $profile->firstname }}" readonly>
                </div>
                <div class="form-group">
                  <label for="fulname">Last Name:</label> 
                  <input type="text" class="form-control" id="lastname" value="{{ $profile->lastname }}" readonly>
                </div>
                <div class="form-group">
                  <label for="email">Email address</label> 
                  <input type="email" class="form-control" id="email" value="{{ $profile->email }}" readonly> 
                </div>  
                <div class="row form-group">
                  <div class="col-xs-6">
                    <label for="dob" class="control-label">Date of Birth</label>
                    <?php 
                      $birth_year = date('d - m - Y',strtotime($profile->dob)); 
                    ?>
                    <input type="text" class="form-control" id="dob" name="dob" value="{{ $birth_year }}" readonly> 
                  </div> 
                  <div class="col-xs-6">
                    <label for="age">Age</label> 
                    <?php 
                      $birth_year = date('Y',strtotime($profile->dob));
                      $year = date('Y');
                    ?>
                    <input type="text" class="form-control" id="age" value="{{ $year - $birth_year }}" readonly> 
                  </div>
                </div> 
                <div class="form-group">
                  <label for="desc">Description</label> 
                  <textarea class="form-control" rows="3" readonly> {{ $profile->description }} </textarea>
                </div>  
              </form>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div> 

  <div class="container"> 
    <h2 class="text-center"> {{ $profile->firstname}}  {{ $profile->lastname}}  Friends</h2> 
      <div class="row"> 
        @foreach ($my_friends as $friend)  
          <div class="col-md-3 text-center"> 
              @if( $friend->profile == '')
                  {{ HTML::image('image/avatar.jpg','logo', array( 'class' => 'img-thumbnail','style' => '150px; height: 150px;' )) }}
              @else
                  {{ HTML::image( '/image/'. $friend->profile,'logo', array( 'class' => 'img-thumbnail','style' => '150px; height: 150px;' )) }}
              @endif
              <h4>{{ $friend->firstname }} {{ $friend->lastname }}</h4>
              <p><a class="btn btn-xs btn-info" href="{{ URL::to('/view-profile-friend') .'/'. $friend->friend_id }}" role="button">View Profile &raquo;</a></p>
             
          </div>  
          @endforeach  
    </div>     
    <hr> 
      <footer>
        <p>&copy; Snack Inc. 2015</p>
      </footer>
  </div> <!-- /container -->
@stop