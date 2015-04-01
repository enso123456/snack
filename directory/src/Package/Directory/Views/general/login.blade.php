@extends('directory::layout.outer_scaff')

@section('login')
	 
    {{ Form::open(array('url' => '/login', 'method' => 'POST','class' => 'row-fluid')) }}
        <div class="control-group">
            <label class="control-label">Email</label>
            <div class="controls"><input class="span12" type="text" name="email" placeholder="email" /></div>
             @if ($errors->has('email')) {{ $errors->first('email') }}  @endif
        </div>
        
        <div class="control-group">
            <label class="control-label">Password:</label>
            <div class="controls"><input class="span12" type="password" name="password" placeholder="password" /></div>
            @if ($errors->has('password')) {{ $errors->first('password') }}  @endif
        </div>

        <div class="control-group">
            <div class="controls"><label class="checkbox inline"><input type="checkbox" name="checkbox1" class="style" value="" checked="checked">Remember me</label></div>
        </div>

        <div class="login-btn"><input type="submit" value="Login" class="btn btn-info btn-block btn-large" /></div>
    {{ Form::close() }}
     
@stop()