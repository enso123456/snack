  
{{ Form::open( array(
		// 'url' => '/tada', 
		'route' => 'upload',
		'method' => 'POST',
		'enctype' => 'multipart/form-data',
		'file' => true )) }} 

	{{ Form::label('bear', 'Bears are?') }}
 {{ Form::select('bear', array(
	 'Panda' => array(
		 'red' => 'Red',
		 'black' => 'Black',
		 'white' => 'White'
	 ),
	 'Character' => array(
		 'pooh' => 'Pooh',
		 'baloo' => 'Baloo'
	 )
 ), 'white') }}
	<input type="file" name="book">
	<input type="submit" value="Send" />
 

 {{ Form::close() }}