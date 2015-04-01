<?php namespace Package\Directory\Repositories;

interface BusinessInterface{
	
	/**
	 * Category Type of a categories
	 * @param get, add, update, delete
	 * @return [type]              [description]
	 */
	public function getcategoryTypeByID($cat_type_id);

	public function addCategoryType($cat_type_name);

	public function updateCategoryType($cat_type_id);

	public function deleteCategoryType($cat_type_id);  

	
	  
}