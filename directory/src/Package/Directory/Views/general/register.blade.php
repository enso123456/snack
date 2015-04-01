@extends('directory::layout.outer_scaff')

@section('login') 

    {{ Form::open(array('url' => '/register-me', 'method' => 'POST','class' => 'row-fluid')) }}  
        <div class="control-group">
            <label class="control-label">Username</label>
            <div class="controls"><input class="span12" type="text" name="username" placeholder="username" /></div>
            @if ($errors->has('username')) {{ $errors->first('username') }}  @endif
        </div>
        
        <div class="control-group">
            <label class="control-label">Password:</label>
            <div class="controls"><input class="span12" type="password" name="password" placeholder="password" /></div>
            @if ($errors->has('password')) {{ $errors->first('password') }}  @endif
        </div>

        <div class="control-group">
            <label class="control-label">Confirm Password:</label>
            <div class="controls"><input class="span12" type="password" name="password_confirmation" placeholder="Confirm Password" /></div> 
        </div>

         <div class="control-group">
            <label class="control-label">Email:</label>
            <div class="controls"><input class="span12" type="text" name="email" placeholder="Email" /></div>
            @if ($errors->has('email')) {{ $errors->first('email') }}  @endif
        </div>

        <div class="control-group">
            <label class="control-label">Firstname:</label>
            <div class="controls"><input class="span12" type="text" name="firstname" placeholder="Firstname" /></div>
        </div>

        <div class="control-group">
            <label class="control-label">Lastname:</label>
            <div class="controls"><input class="span12" type="text" name="lastname" placeholder="Password" /></div>
        </div>

        <div class="login-btn"><input type="submit" value="Register" class="btn btn-info btn-block btn-large" /></div> 
    {{ Form::close() }}
      
@stop()