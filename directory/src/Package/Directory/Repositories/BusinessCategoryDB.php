<?php namespace Package\Directory\Repositories;

use Package\Directory\Repositories\BusinessCategoryInterface;
use Package\Directory\Models\BusinessCategory;

class BusinessCategoryDB implements BusinessCategoryInterface{

	public function getBusinessCategories(){
		return $business_chain_with_category = BusinessCategory::join('business' ,'business.id' ,'=','business_category.business_id')
								->join('categories','categories.id' ,'=','business_category.category_id')
								->get(); 
	}

	public function getBusinessCategoryByID($bussness_cat_id){}

	public function addBusinessCategory($bussness_id,$category_id,$category_type_id){}

	public function updateBussinessCategory($bussness_cat_id){}

	public function destroyBussinessCategory($bussness_cat_id){}
	
}
