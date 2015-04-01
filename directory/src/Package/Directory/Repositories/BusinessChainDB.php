<?php namespace Package\Directory\Repositories;

use Input,Validator;
use Package\Directory\Repositories\BusinessChainInterface; 
use Package\Directory\Models\DirectoryBusinessChain;

use Package\Directory\Models\Business;

class BusinessChainDB implements BusinessChainInterface{
 
	public function getBusinessChain(){
	 	return DirectoryBusinessChain::all(); 
	}

	public function getBusinesswithChain(){
		return DirectoryBusinessChain::with('business')->get(); 
	}
	
	public function getBusiness(){
		return Business::all(); 
	}

	public function getBusinessChainById($business_chain_id){

	}  

	public function createBusinessChain(){ 

		$chain_name = Input::get('chain_name'); 
		$business_chain = new DirectoryBusinessChain; 
		$business_chain->chain_name = $chain_name; 
		$business_chain->save();  

		return 'Data was saved';
	}

	public function updateBusinessChain($business_chain_id){

	}

	public function deleteBusinessChain($business_chain_id){

	}

	public function getBusinessByID($bussness_id){

	}

	public function createBusiness(){ 

		$business = new Business;

		$business->business_chain_id = Input::get('chain_id');
		$business->business_name = Input::get('business_name');
		$business->description = Input::get('description');
		$business->phone = Input::get('phone');
		$business->country_id = Input::get('country_id');
		$business->postal_code = Input::get('postal_code');
		$business->street_address = Input::get('street_address'); 

		if( $business->save() )
		{
			$business_category = new BusinessCategory;

			$business_category->business_id = $business->id;
			$business_category->category_id = Input::get('category_id');

			$business_category->save();

			$status = '200';
		}
		else{
			$status = '500';
		}

		return ['status' => $status];
	}

	public function editBusiness($bussness_id){
		return Business::find($bussness_id); 
	}

	public function updateBusiness($bussness_id){

	 	$business = Business::find($bussness_id);

		$business->business_chain_id = Input::get('chain_id');
		$business->business_name = Input::get('business_name');
		$business->description = Input::get('description');
		$business->phone = Input::get('phone');
		$business->country_id = Input::get('country_id');
		$business->postal_code = Input::get('postal_code');
		$business->street_address = Input::get('street_address'); 

		if($business->save()){
			$business_category = BusinessCategory::find($business->id); 
			$business_category->category_id = Input::get('category_id'); 
			
			$business_category->save(); 
			return true;
		}   
		return false;
	}

	public function deleteBusiness($bussness_id){
		$business = Business::find($bussness_id); 
		BusinessCategory::destroy($business->id);   
		$business->delete();   
	}
}

