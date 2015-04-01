<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Snack</title> 
    {{ HTML::style('css/bootstrap.min.css') }}  
    {{ HTML::style('css/signin.css') }}  
     
  </head>
  <body>
    <div class="container">
      @yield('outer_content')    
    </div>      
    @include('snack.js.scripts')
  </body>
</html>