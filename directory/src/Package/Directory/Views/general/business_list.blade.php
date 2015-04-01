<h2>Business Directory with Chain</h2>
<table class="table table-bordered" uid="business_with_chain">
  <thead>
      <tr>
        <th>#</th>
        <th>Business Chain Name</th>
        <th>Business Name</th>
        <th>Description</th>
        <th>Phone</th>
        <th>Street Address</th>  
      </tr>
  </thead>
  <tbody>
      @if(isset($business_with_chain)) 
        @foreach($business_with_chain as $businesses) 
          @foreach($businesses->business as $business) 
            <tr> 
                <td>{{ $business->id }}</td> 
                <td>{{ $businesses->chain_name }}</td>  
                <td>{{ $business->business_name}}</td>
                <td>{{ $business->description }}</td> 
                <td>{{ $business->phone }}</td>
                <td>{{ $business->street_address }}</td>   
            </tr> 
          @endforeach 
        @endforeach 
      @endif
  </tbody>
</table>

<h2>Business Directory by Category</h2>
<table class="table table-bordered" uid="business_with_chain">
  <thead>
      <tr> 
        <th>Business Name</th>
        <th>Business Category</th> 
      </tr>
  </thead>
  <tbody>
      @if(isset($business_by_category)) @foreach($business_by_category as $business_category) 
      <tr>  
          <td>{{ $business_category->business_name }}</td>  
          <td>{{ $business_category->category_name}}</td> 
      </tr> 
      @endforeach @endif
  </tbody>
</table>

<h2>Business Directory </h2>
<table class="table table-bordered" >
  <thead>
      <tr>
        <th>#</th> 
        <th>Business Name</th>
        <th>Description</th>
        <th>Phone</th>
        <th>Street Address</th>
        <th>Action</th>  
      </tr>
  </thead>
  <tbody uid="business_list">
      @if(isset($business_lists)) @foreach($business_lists as $business_list)  
      <tr> 
          <td>{{ $business_list->id }}</td>  
          <td>{{ $business_list->business_name}}</td>
          <td>{{ $business_list->description }}</td> 
          <td>{{ $business_list->phone }}</td>
          <td>{{ $business_list->street_address }}</td>   
          <td> 
            <a href="{{ URL::to('/edit') .'/'. $business_list->id}}" ><i class="glyphicon glyphicon-pencil" alt="Edit"></i></a> | 
            <a href="{{ URL::to('/delete/') .'/'. $business_list->id }}" ><i class="glyphicon glyphicon-trash" alt="Delete"></i> </a>
          </td>
      </tr> 
      @endforeach @endif
  </tbody>
</table>

