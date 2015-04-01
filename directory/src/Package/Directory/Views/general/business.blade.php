@extends('directory::layout.scaff')

@section('table_list')
	@include('directory::general.business_list')
@stop

@section('content')

	<h2>Business Chain</h2>
	<!-- Error Calling -->
	<div class="errors bs-callout bs-callout-danger"  style="display:none"></div> 
	<!-- Form -->
	<form uid="chain_details"> 
	  	<div class="form-group">
		    <label for="chain_name">Business Chain Name:</label>
		    <input type="text" class="form-control" id="chain_name" name="chain_name" placeholder="Enter Chain Name">
		    @if ($errors->has('chain_name')) {{ $errors->first('chain_name') }}  @endif
	  	</div> 
	  	<input type="submit" class="btn btn-default" uid="business_chain" value="Submit"> 
 
	</form>
	
	
	<h2>Business Details</h2>  
	<!-- Error Calling -->
	<div class="errors bs-callout bs-callout-danger"  style="display:none"></div> 
	<form uid="business_details"> 
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
			    <input type="text" class="form-control" id="business_name" name="business_name" placeholder="Enter Business Name">
			    @if ($errors->has('business_name')) {{ $errors->first('business_name') }}  @endif
		  	</div> 
		  	
		  	<div class="form-group">
			    <label for="description">Description:</label>
			    <textarea  class="form-control" rows="3" id="description" name="description"></textarea>
		  	</div>  
		  	
		  	<div class="form-group">
			    <label for="category_id">Category:</label> 
			    <select class="form-control" name="category_id">
					@if(isset($category_type))  @foreach($category_type as $category_types) 
						<option value="{{ $category_types->id }}"> {{ $category_types->category_name}} </option>  
					@endforeach @endif 
				</select>
		  	</div> 

		  	<div class="form-group">
			    <label for="phone">Phone:</label>
			    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter phone #">
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
			    <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="Enter postal code">
		  	</div>  
		  	
		  	<div class="form-group">
			    <label for="street_address">Street Address:</label>
			    <textarea  class="form-control" rows="3" id="street_address" name="street_address"></textarea>
		  	</div>   
		   
	  	<input type="submit" class="btn btn-default" uid="submit_business" value="Submit">  
	</form> 

	
@stop

@section('scripts')

	<script type="text/javascript">  
		var urlprefix = 'http://directory.web';

		$('[uid="chain_details"]').on('submit',function(e){
			e.preventDefault();
  
			var form = $(this);
			var post_url = urlprefix + '/create_business_chain';
			var get_url = urlprefix + '/chain_name?1';
			// submit the chain name
			$.post(post_url,form.serialize(),function(data){ 
				if(data.status == '500')
				{ 
					$('.errors').css({display:"block",color: "#d9534f"});
					$('.errors').html('<h4>' + data.result + '</h4>');
					setTimeout(function () {
						$('.errors').fadeOut();  
					},3000);
				} 
				else{
					$('#chain_id').empty();
				} 
			}).done(function(data){
				// get submitted chain name and append to chain name options
				$.get(get_url,function(data){ 
				$.each(data,function(index,chainName){ 
						$('#chain_id').append('<option value="'+ chainName.id  +'"> '+ chainName.chain_name +' </option>  ');
					});

				})
			}); 

		
		});
		
		$('[uid="business_details"]').on('submit',function(e){   
			e.preventDefault();

			var form = $(this);
			var url = urlprefix + '/create_business'; 
			var get_url = urlprefix + '/business_directory?1';  

			$.post(url,form.serialize(),function(data){   
				if(data.status == '500')
				{ 
					$('.errors').css({display:"block",color: "#d9534f"});
					$('.errors').html('<h4>' + data.result + '</h4>');
					setTimeout(function () {
						$('.errors').fadeOut();  
					},3000);
				} 
				else{
					$('[ uid="business_list"]').empty();
				}
			}).done(function(data){ 
				$.get(get_url,function(data){ 
					$.each(data,function(index,businessObj){  
						  
						var table = ' <td>'+ businessObj.id +'</td>' ;
							table +=' <td>'+ businessObj.business_name +'</td>';
							table +=' <td>'+ businessObj.description +'</td> ';
							table +=' <td>'+ businessObj.phone +'</td>';
					 	    table +=' <td>'+ businessObj.street_address +'</td> ';
					 	     table +=' <td><a href="{{ URL::to("/edit") . "/" . "'+businessObj.id+'" }} " alt="Edit"><i class="glyphicon glyphicon-pencil"></i></a>  | <a href="{{ URL::to("/delete") . "/" . "'+businessObj.id+'" }} "><i class="glyphicon glyphicon-trash" alt="Delete"></i></a></td>';
						$('[ uid="business_list"]').append( '<tr>'+table +'</tr>' );
					});
				});
			});  
		});

		$('[uid="edit_business_details"]').on('submit',function(e){   
			e.preventDefault();

			var form = $(this);
			var url = urlprefix + '/edit_business/'; 
			var get_url = urlprefix + '/business_directory?1';

			$.post(url,form.serialize(),function(data){   
				if(data.status == '500')
				{ 
					$('.errors').css({display:"block",color: "#d9534f"});
					$('.errors').html('<h4>' + data.result + '</h4>');
					setTimeout(function () {
						$('.errors').fadeOut();  
					},3000);
				} 
				else{
					$('[ uid="business_list"]').empty();
				}
			}).done(function(data){ 
				$.get(get_url,function(data){ 
					$.each(data,function(index,businessObj){   
						var table = ' <td>'+ businessObj.id +'</td>' ;
							table +=' <td>'+ businessObj.business_name +'</td>';
							table +=' <td>'+ businessObj.description +'</td> ';
							table +=' <td>'+ businessObj.phone +'</td>';
					 	    table +=' <td>'+ businessObj.street_address +'</td>'; 
						$('[ uid="business_list"]').append('<tbody uid="business_list"><tr>'+table +'</tr></tbody>');
					});
				});
			});  
		});
		  
	</script>
@stop

