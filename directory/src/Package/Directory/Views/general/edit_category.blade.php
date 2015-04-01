@extends('directory::layout.scaff')

@section('table_list')
	@include('directory::general.category_list')
@stop

@section('content')

	<h2>Categories</h2>
	{{ Form::open(array('url' => '/category/update/'. $edit_category->id ,'class' => 'row-fluid', 'method' => 'POST')) }}
		<div class="form-group">
		    <label for="category_type">Category Type:</label> 
		    <select class="form-control" id="category_type_id" name="category_type_id"> 
		    	@foreach($category_type as $category_types)
					<option value=" {{ $category_types->category_type_id }} ">{{ $category_types->category_type_name  }}</option> 
				@endforeach
			</select>
	  	</div> 
	  	<div class="form-group">
		    <label for="parent_category"> Parent Category: * optional</label> 
		    <select class="form-control" id="parent_id" name="parent_id"> 
		    	<option value="0">None</option> 
				@foreach($categories as $categories)
					<option value=" {{ $categories->id }} ">{{ $categories->category_name  }}</option> 
				@endforeach
			</select>
	  	</div> 
	  	<div class="form-group">
		    <label for="category_name">Category Name:</label>
		    <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter category name" value="{{ $edit_category->category_name }}">
		    @if ($errors->has('category_name')) {{ $errors->first('category_name') }}  @endif
	  	</div>  
		<button type="submit" class="btn btn-default">Submit</button>
	</form> 

@stop

