<?php namespace Package\Directory\Repositories;

interface BusinessCategoryInterface{

	/**
	 * Bussiness Category assosciation of a business and a category
	 * @param  get, add, update, delete
	 * @return [type]                  [description]
	 */
	public function getBusinessCategoryByID($bussness_cat_id);

	public function addBusinessCategory($bussness_id,$category_id,$category_type_id);

	public function updateBussinessCategory($bussness_cat_id);

	public function destroyBussinessCategory($bussness_cat_id);
} 

