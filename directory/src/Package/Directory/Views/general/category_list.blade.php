<h2>Business Categories</h2>
<table class="table table-bordered" uid="category">
  <thead>
      <tr>  
        <th>#</th> 
        <th>Category Name</th> 
        <th>Category Type</th> 
        <th>Parent Category</th>
        <th>Action</th>
      </tr>
  </thead>
  <tbody>
    @foreach($category as $category_with_type)  
      <tr>    
        <td> {{ $category_with_type->id }}</td>
        <td> {{ $category_with_type->category_name }} </td>  
        <td> {{ $category_with_type->category_type_name }} </td>   
        <td> {{ $category_with_type->parent_id }} </td>  
        <td>
           <a href="{{ URL::to('/category/edit') .'/'. $category_with_type->id}}" ><i class="glyphicon glyphicon-pencil" alt="Edit"></i></a> | 
            <a href="{{ URL::to('/category/delete/') .'/'. $category_with_type->id }}" ><i class="glyphicon glyphicon-trash" alt="Delete"></i> </a>
        </td>  
      </tr>   
    @endforeach 
  </tbody>
</table>