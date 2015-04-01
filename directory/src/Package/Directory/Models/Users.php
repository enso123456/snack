<?php namespace Package\Directory\Models;

class Users extends \Eloquent{
	
	  protected $table = 'users';

	  protected $fillable = array('username','email','password');

	  protected $guarded = array('password'); 
}


