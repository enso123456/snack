<?php namespace Package\Directory\Repositories; 

interface CategoriesInterface{

	/**
	 * Categories
	 * @param  get, add, update, delete
	 * @return [type]         [description]
	 */

	public function getCategoriesById($cat_id);

	public function addCategories();

	public function updateCategories($cat_id);
	
	public function deleteCategories($cat_id);
}