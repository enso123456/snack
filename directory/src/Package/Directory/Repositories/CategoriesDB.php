<?php namespace Package\Directory\Repositories;

use Input;
use Package\Directory\Repositories\CategoriesInterface;  
use Package\Directory\Models\Categories;
use Package\Directory\Models\CategoryTypes; 

class CategoriesDB implements CategoriesInterface{
 
	/**
	 * Categories
	 * @param  get, add, update, delete
	 * @return [type]         [description]
	 */
	public function getCategories(){
		return $categories = Categories::all(); 
	}

	public function getCategorieswithType(){
		return Categories::join('category_types','category_types.category_type_id','=','categories.category_types_id')->get();
	}

	public function getCategoryTypes(){
		return CategoryTypes::all();
	}

	public function getCategoriesById($cat_id){
		return Categories::find($cat_id);
	}

	public function addCategories(){
		$category = new Categories;

		$category->category_types_id = Input::get('category_type_id');
		$category->category_name = Input::get('category_name');
		$category->parent_id = Input::get('parent_id');

		$category->save();
	}

	public function editCategories($cat_id){
		return Categories::find($cat_id);
	}
	public function updateCategories($cat_id){
		$category = Categories::find($cat_id);
		$category->category_types_id = Input::get('category_type_id');
		$category->category_name = Input::get('category_name');
		$category->parent_id = Input::get('parent_id');

		$category->save(); 
	}
	
	public function deleteCategories($cat_id){
		return Categories::destroy($cat_id);    
	}
}

