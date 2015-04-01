<?php namespace Package\Directory\Repositories;

interface UserInterface{ 

	public function createUser();

	public function editUser($id);

	public function updateUser($id);

	public function destroyUser($id);
} 

