@extends('directory::layout.scaff')

@section('table_list')
	@include('directory::general.business_list')
@stop

@section('content')  
	{{ Form::open(  array( 'url' => '/update/' . $business->id  , 'method' => 'POST', 'class' => 'form-fluid') ) }}

		<!-- Create Form --> 
	  	<div class="form-group">
		    <label for="chain_id">Business Chain Name:</label> 
		    <select class="form-control" id="chain_id" name="chain_id">
				@if(isset($business_chain))  @foreach($business_chain as $business_chain) 
					<option value="{{ $business_chain->id }}"> {{ $business_chain->chain_name}} </option>  
				@endforeach @endif 
			</select>
	  	</div> 
		
		<div class="form-group">
		    <label for="business_name">Business Name:</label>
		    <input type="text" class="form-control" id="business_name" name="business_name" placeholder="Enter Business Name" value="{{ $business->business_name }}"> 
		    @if ($errors->has('business_name')) {{ $errors->first('business_name') }}  @endif
	  	</div> 
	  	
	  	<div class="form-group">
		    <label for="description">Description:</label>
		    <textarea  class="form-control" rows="3" id="description" name="description">{{ $business->description }}</textarea>
		    @if ($errors->has('description')) {{ $errors->first('description') }}  @endif
	  	</div>  
	  	
	  	<div class="form-group">
		    <label for="category_id">Category:</label> 
		    <select class="form-control" id="category_id" name="category_id">
				@if(isset($category_type))  @foreach($category_type as $category_types) 
					<option value="{{ $category_types->id }}"> {{ $category_types->category_name}} </option>  
				@endforeach @endif 
			</select>
	  	</div> 

	  	<div class="form-group">
		    <label for="phone">Phone:</label>
		    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter phone #" value="{{ $business->phone }}">
	        @if ($errors->has('phone')) {{ $errors->first('phone') }}  @endif
	  	</div>   
	  	
	  	<div class="form-group">
		    <label for="country_id">Country:</label>
		    <select class="form-control" name="country_id">
				@if(isset($country))  @foreach($country as $countries) 
					<option value="{{ $countries->id }}"> {{ $countries->country_name}} </option>  
				@endforeach @endif 
			</select>
	  	</div>  
	  	
	  	<div class="form-group">
		    <label for="postal_code">Postal Code:</label>
		    <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="Enter postal code" value="{{ $business->postal_code }}">

	  	</div>  
	  	
	  	<div class="form-group">
		    <label for="street_address">Street Address:</label>
		    <textarea  class="form-control" rows="3" id="street_address" name="street_address">{{ $business->street_address }}</textarea>
		    @if ($errors->has('street_address')) {{ $errors->first('street_address') }}  @endif
	  	</div>   
	   
		<input type="submit" class="btn btn-default" uid="submit_business" value="Submit">  
	{{ Form::close() }} 

@stop
 