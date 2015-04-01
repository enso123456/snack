<?php namespace Lib\Repository;

interface UsersInterface{

	public function getUserById($id);
	
	public function validator(); 
	
	public function user_validation(); 
	
	public function createUser();
 
	public function updateUser($id);

	public function destroyUser($id);


}
