<?php namespace Package\Directory\Models;
   
class CategoryTypes extends \Eloquent {

	protected $table = 'category_types'; 
 	
 	public $timestamps = false;
 
 	public function categories(){
 		return $this->hasMany('Package\Directory\Models\Categories','category_types_id');
 	}
}
