@extends('snack.out_scaff')

@section('outer_content')

	<div class="signin"> 
    <div class="bs-callout bs-callout-danger" id="callout-glyphicons-dont-mix">
      <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    
    {{ Form::open( array( 
      'class' => 'form-signin',
      'url' => 'register',
      'method' => 'POST')) 
    }}  
      <h2 class="form-signin-heading">Registration</h2>
      <div class="form-group">
        <label for="firstname">Firstname</label>
        <input type="text" class="form-control" id="firstname" name="firstname">
      </div>
      <div class="form-group">
        <label for="lastname">Lastname</label>
        <input type="text" class="form-control" id="lastname" name="lastname">
      </div>
      <div class="form-group">
        <label for="dtp_input2" class="control-label">Date Picking</label>
        <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dob" data-link-format="yyyy-mm-dd">
        <input class="form-control" size="16" type="text" value="" readonly>
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
        </div>
        <input type="hidden" id="dob" name="dob" value="" /><br/>
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username">
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div> 
      <div class="form-group">
        <label for="password_confirmation">Password Confirmation</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password">
      </div> 
      <button class="btn btn-lg btn-success btn-block" type="submit">Register</button>
      <a href="{{ URL::to('/')}}" class="btn btn-lg btn-primary btn-block" > Login</a> 
    {{ Form::close() }} 
  </div>
@stop

@section('script')

@stop