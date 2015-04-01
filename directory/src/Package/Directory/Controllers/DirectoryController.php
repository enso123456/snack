<?php namespace Package\Directory\Controllers;

use View,Redirect,Input,Validator,Response;

use Package\Directory\Repositories\CategoriesInterface;  
use Package\Directory\Repositories\BusinessChainInterface; 
use Package\Directory\Repositories\BusinessCategoryInterface;  
use Package\Directory\Models\Country;

class DirectoryController extends \BaseController{

	protected $categories;
	protected $business_chain;
	protected $countries;
	protected $business_by_category;

	public function __construct(CategoriesInterface $categories,BusinessChainInterface $business_chain,BusinessCategoryInterface $business_by_category){
		$this->categories = $categories; 
		$this->business_chain = $business_chain;
		$this->business_by_category = $business_by_category;
	}

	public function dashboard(){
		$categories = $this->categories->getCategories();  
		$business_chain = $this->business_chain->getBusinessChain();
		$countries = Country::all(); 
		$business_with_chain = $this->business_chain->getBusinesswithChain();
		$business_list = $this->business_chain->getBusiness(); 
		$business_by_category = $this->business_by_category->getBusinessCategories();

		return View::make('directory::general.business')->with(array_merge(
			array(
				'category_type' => $categories, 
				'business_chain' => $business_chain ,
				'country' => $countries,
				'business_with_chain' => $business_with_chain ,
				'business_lists' => $business_list,
				'business_by_category' => $business_by_category 
			)
		));
	} 

	public function about(){
		return View::make('directory::general.about');
	}

	public function ajaxBusinessLists(){
		$getBusiness = $this->business_chain->getBusiness(); 
		return Response::json( $getBusiness );
	}

	public function validateChainName(){
		$data = Input::all();

		$rules = array(
			'chain_name' => 'required|unique:business_chain,chain_name'
		);

		return Validator::make($data,$rules);  
	}
	
	public function validateBusiness(){
		$data = Input::all();

		$rules = array(
			'business_name' => 'required',
			'phone' => 'required|numeric',
			'description' => 'required',
			'street_address' => 'required'
		);

		return Validator::make($data,$rules);  
	}

	public function createBusinessChain(){
		$validate = $this->validateChainName();
		$result = 'success';
		$status = '';
		if($validate->fails()){
			$status = '500';
			$result = 'Error in business chain name';  
		}else{
			$data =  $this->business_chain->createBusinessChain(); 
		} 
		return  Response::json(array(
			'status' => $status,
			'result' => $result
		));
	}

	public function createBusiness(){  
		$validate = $this->validateBusiness();

		$result = 'success';
		$data = '';
		if($validate->fails())
		{	
			$status = '500';
			$result = 'Error in submiting bussiness directory'; 
		}
		else{
			$status =  $this->business_chain->createBusiness();  
		}

		return Response::json( array(
			'status' => $status,
			'result' => $result, 
		));
	}
 
	public function editBusiness($business_id){

		$categories = $this->categories->getCategories();
		$business_chain = $this->business_chain->getBusinessChain();
		$countries = Country::all(); 
		$business_with_chain = $this->business_chain->getBusinesswithChain();
		$business_list = $this->business_chain->getBusiness(); 
		$business = $this->business_chain->editBusiness($business_id);  
		
		return View::make('directory::general.edit_business')->with(array_merge(
			array(
				'category_type' => $categories, 
				'business_chain' => $business_chain,
				'country' => $countries,
				'business_with_chain' => $business_with_chain ,
				'business_lists' => $business_list,
				'business' => $business
			)
		)); 
	}

	public function updateBusiness($business_id){
		$validate = $this->validateBusiness();

		if($validate->fails()){ 
			return Redirect::to('/edit/'.$business_id)->withErrors($validate);  
		}
		else{ 
		 	$this->business_chain->updateBusiness($business_id);
			return Redirect::to('/');
		}
	}

	public function deleteBusiness($business_id){
		$this->business_chain->deleteBusiness($business_id);
		return Redirect::to('/');
	}  
}
