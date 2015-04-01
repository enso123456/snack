<?php namespace Package\Directory\Models;

class DirectoryBusinessChain extends \Eloquent{

	protected $table = 'business_chain'; 
 	
 	public $timestamps = false;

 	public function business(){
 		return $this->hasMany('Package\Directory\Models\DirectoryBusiness','business_chain_id');
 	}

}
