<?php namespace Package\Directory\Controllers;
 
use Auth,View,Redirect,Response,Session,Cookie,Validator;
 
use Package\Directory\Repositories\UserInterface;

class DirectoryLoginContoller extends \BaseController{

	protected $user;

	public function __construct(UserInterface $user){
		$this->user = $user;
	}

	public function getLogin(){
		$data = array(
			'title' => 'Directory Admin::Login',
			'page' => 'Login'
		);
		return View::make('directory::general.login')->with('data',$data);
	} 

	public function postLogin(){ 
		$authenticate = $this->user->authenticate();

		if( $authenticate->fails() ){  
			$messages = $authenticate->messages();  
			return  Redirect::to('/login')->withErrors($authenticate);  
		}else { 
			$this->user->authenticate_user();
			return Redirect::to('/home');
		}  
	}

	public function getRegister(){
		$data = array(
			'title' => 'Directory Admin::Register',
			'page' => 'Register'
		); 
		return View::make('directory::general.register')->with('data',$data);
	}

	public function postRegister(){   
		$validator = $this->user->validator();

		if( $validator->fails() ){  
			$messages = $validator->messages();  
			return  Redirect::to('/register')->withErrors($validator);  
		}else { 
			$this->user->createUser();
			return  Redirect::to('/login');
		}  
	}

	public function doLogout(){  
		Session::flush();
		$cookie = Cookie::forget('user');  
		return Redirect::to('/login')->withCookie($cookie);
	}
}



