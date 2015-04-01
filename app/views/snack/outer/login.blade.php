@extends('snack.out_scaff')

@section('outer_content')
	<div class="signin">
      @if(Session::has('message'))
          <p class="alert alert-danger">{{ Session::get('message') }}</p>
      @endif
        {{ Form::open( array( 
          'class' => 'form-signin',
          'url' => 'do-login',
          'method' => 'POST')) 
        }}  
          <h2 class="form-signin-heading">Please sign in</h2>
           <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
           </div>
           <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password"placeholder="Password">
           </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <a href="{{ URL::to('/register')}}" class="btn btn-lg btn-success btn-block" > Register</a> 
      {{ Form::close() }} 
    </div>
@stop