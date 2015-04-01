<?php namespace Package\Directory\Repositories;

use Validator,Auth,Cookie,Config,Session,Input,Hash,DB; 
  
use Package\Directory\Models\Users;

class UserDatabase implements UserInterface {

 	public function validator(){
 		$validate_rules = array(
			 
			'username' => 'required|between:4,32|unique:users',
			'email' => 'required|email|unique:users',
			'password' => 'required|alpha_num|between:6,32|confirmed', 
			'password_confirmation' => 'required|alpha_num|between:6,32',
			
		); 
 		return Validator::make(Input::all(),$validate_rules);  
 	}

 	public function authenticate(){
		$authenticate_rules = array( 
			'email' => 'required', 
			'password' => 'required',   
		); 
 		return Validator::make(Input::all(),$authenticate_rules);  
 	}

 	public function authenticate_user(){ 
 		$userdata = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);
		
		if(Auth::attempt($userdata))
		{  
			$user = Users::find(Auth::user()->id);
			Session::put('loggedIn', true);
			Session::put('user', $user->toArray());
			return Session::get('user.username'); 
		}
		return false;  
 	}

	public function createUser(){
	 
		$user = new Users;

		$username = Input::get('username');
		$password = Input::get('password');

		$user->username = $username; 
		$user->email = Input::get('email');
		$user->password = Hash::make($password);
		$user->firstname = Input::get('firstname');
		$user->lastname = Input::get('lastname');
		$user->email = Input::get('email');

		$user->save();  
 
	}

	public function editUser($id){

	}

	public function updateUser($id){

	}

	public function destroyUser($id){

	}
}