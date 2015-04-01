<?php namespace Package\Directory\Models;

class BusinessCategory extends \Eloquent{

	protected $table = 'business_category'; 
 	
 	public $timestamps = false;
 	
 	public function business(){
 		return $this->hasMany('Package\Directory\Models\DirectoryBusiness','business_id');
 	} 
}