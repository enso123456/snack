<?php namespace Package\Directory\Models;
 
class Categories extends \Eloquent{

	protected $table = 'categories'; 
 	
 	public $timestamps = false; 
 	
 	public function category_types(){
 		return $this->belongsTo('Package\Directory\Models\CategoryTypes');
 	}
}


