<?php namespace Package\Directory\Controllers;

use View,Redirect,Input,Validator,Response;
   
use Package\Directory\Repositories\CategoriesInterface;  

class CategoriesController extends \BaseController{

	protected $categories; 

	public function __construct(CategoriesInterface $categories){
		$this->categories = $categories;  
	}

	public function get_category_list(){ 

		$categories = $this->categories->getCategories();
		$category = $this->categories->getCategorieswithType(); 
		$category_type = $this->categories->getCategoryTypes();  

		return View::make('directory::general.category')->with(
			array(
				'categories' => $categories,
				'category' => $category,
				'category_type' =>  $category_type
			)
		);
	}

	public function validateCategory(){
		$data = Input::all(); 

		$rules = array(
			'category_name' => 'required|unique:categories,category_name',
		); 
		
		return Validator::make($data,$rules);
	}

	public function validateUpdateCategory(){
		$data = Input::all(); 

		$rules = array(
			'category_name' => 'required',
		); 
		
		return Validator::make($data,$rules);
	}

	public function create_category(){ 
		$validation = $this->validateCategory();

		if( $validation->fails() ){
			return Redirect::to('/category')->withErrors($validation);
		}
		else{ 
			$this->categories->addCategories();
			return Redirect::to('/category');
		} 	
	}

	public function edit_category($id){
		$edit_category = $this->categories->editCategories($id);
		$categories = $this->categories->getCategories();
		$category = $this->categories->getCategorieswithType(); 
		$category_type = $this->categories->getCategoryTypes();  

		return View::make('directory::general.edit_category')->with(
			array(
				'edit_category' => $edit_category,
				'categories' => $categories,
				'category' => $category,
				'category_type' =>  $category_type
			)
		);
	}

	public function update_category($id){

		$validate = $this->validateUpdateCategory();

		if($validate->fails()){ 
			return Redirect::to('/category/edit/'.$id)->withErrors($validate);  
		}
		else{  
		 	$this->categories->updateCategories($id);
			return Redirect::to('/category');
		}
	}

	public function delete_category($id){
		$this->categories->deleteCategories($id);
		return Redirect::to('/category');
	}

}