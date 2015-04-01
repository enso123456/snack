@extends('snack.inner_scaff')

@section('inner_content')
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="text-center">Welcome {{ $profile->firstname }} {{ $profile->lastname }}</h1>
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
              <label>My Profile</label>
            </div>
            <div class="panel-body">
              <div class="bs-callout bs-callout-danger" id="callout-glyphicons-dont-mix">
                <ul>
                  @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
               {{ Form::open( array( 
                  'url' => 'update_profile/' . $profile->id,
                  'method' => 'POST',
                  'enctype' => 'multipart/form-data',
                  'file' => true )) 
                }} 
                <div class="form-group">
                  <label for="fulname">First name:</label> 
                  <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $profile->firstname }}">
                </div>
                <div class="form-group">
                  <label for="fulname">Last Name:</label> 
                  <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $profile->lastname }}">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label> 
                  <input type="email" class="form-control" id="email" name="email" value="{{ $profile->email }}">

                </div> 
                <div class="form-group">
                  <label for="dob" class="control-label">Date of Birth</label>
                  <div class="input-group date form_date" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dob" data-link-format="dd-mm-yyyy">
                    <input class="form-control" size="16" type="text" value="{{ $profile->dob }}" readonly> 
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                  </div>
                  <input type="hidden" id="dob" name="dob" value="{{ $profile->dob }}" /><br/>
                </div> 
                <div class="form-group">
                  <label for="file">File input</label>
                  <input type="file" id="file" name="file" value="{{ $profile->profile }}"> 
                </div>
                <div class="form-group">
                  <label for="desc">Description</label> 
                  <textarea class="form-control" id="description" name="description" rows="3"> {{ $profile->description }} </textarea>
                </div>
                <button type="submit" class="btn btn-lg btn-success pull-right">Update</button> 
              {{ Form::close() }}
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div> 

  <div class="container">  
      <hr> 
      <footer>
        <p>&copy; Snack Inc. 2015</p>
      </footer>
    </div> <!-- /container -->   
@stop