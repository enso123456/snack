<?php namespace Lib\Repository; 

use Validator,Input,User,Hash;  

class UserDB implements UsersInterface{ 

	public function getUserById($id){
  		return User::find($id);
  	} 
  	
  	public function validator(){
  		$validate_rules = array( 
			'firstname' => 'required',
			'lastname' => 'required',  
			'username' => 'required|between:4,32|unique:users',
			'email' => 'required|email|unique:users',
			'dob' => 'required',
			'password' => 'required|alpha_num|between:6,32|confirmed', 
			'password_confirmation' => 'required|alpha_num|between:6,32',
			
		); 
 		return Validator::make(Input::all(),$validate_rules);  
  	}  

  	public function user_validation(){
  		$validate_rules = array( 
			'firstname' => 'required',
			'lastname' => 'required',   
			'email' => 'required|email',
			'dob' => 'required', 
			'description' => 'required' 
		); 
 		return Validator::make(Input::all(),$validate_rules);  
  	}

	public function createUser(){
	 
		$user = new User;

		$username = Input::get('username');
		$password = Input::get('password');

		$user->username = $username; 
		$user->email = Input::get('email');
		$user->password = Hash::make($password);
		$user->firstname = Input::get('firstname');
		$user->lastname = Input::get('lastname');
		$user->email = Input::get('email'); 
		$user->dob = Input::get('dob');

		$user->save();  
 
	} 

	public function updateUser($id){
		$user = User::find($id);

		if( Input::hasFile('file')){
			$file = Input::file('file')->getClientOriginalName();
			$destinationPath = public_path() . '\image' ;
			$uploadSuccess  =  Input::file('file')->move($destinationPath, $file); 
		}else{
			$file = $user->profile; 
		} 
 
		$user->firstname = Input::get('firstname');
		$user->lastname = Input::get('lastname');
		$user->email = Input::get('email');
		$user->description = Input::get('description');
		$user->profile = $file;
		$user->dob = Input::get('dob');

		$user->save();  
	}
 
	public function destroyUser($id){

	}
}