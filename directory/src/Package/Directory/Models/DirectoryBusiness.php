<?php namespace Package\Directory\Models;

class DirectoryBusiness extends \Eloquent{

	protected $table = 'business'; 
 	
 	public $timestamps = false;

 	public function business_chain(){
 		return $this->belongsTo('Package\Directory\Models\DirectoryBusinessChain');
 	}

 	public function business_category(){
 		return $this->belongsTo('Package\Directory\Models\BusinessCategory');
 	}
}