<!DOCTYPE html>
<html lang="en">
	<head> 
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content=""> 
		<title>Laravel Directory Listing</title> 
		<!-- Custom styles for this template -->   
		{{ HTML::style('css/bootstrap.min.css') }}
		{{ HTML::style('css/offcanvas.css') }}  
	</head>
	<body>
		<!-- header -->
		@include('directory::layout.header')
		
		<div class="container">
			<div class="row row-offcanvas row-offcanvas-right">

				<!-- Main content --> 
				<div class="col-xs-12">
					@yield('table_list') 
				</div> 
				<div class="col-xs-8"> 
					@yield('content') 
				</div> 

			</div>
			<!-- footer -->
			@include('directory::layout.footer')
		</div>

		<!-- Custom scripts for this template --> 
		{{ HTML::script('js/jquery-1.8.1.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
		{{ HTML::script('js/offcanvas.js') }}
		@yield('scripts')
	</body> 
</html>
