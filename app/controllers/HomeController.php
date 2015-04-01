<?php  

use Lib\Repository\UsersInterface;  

class HomeController extends BaseController {

	public function __construct(UsersInterface $user){
		$this->user = $user;
	}

	public function get_login(){
		return View::make('snack.outer.login');  
	}
	
	public function do_Login(){ 
		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
		    Session::put('id',Auth::user()->id);  
		     
		    return Redirect::to('/profile');
		} 
		else { 
		    return Redirect::to('/')
		        ->with('message', 'Your username/password combination was incorrect')
		        ->withInput();
		}
	}

	public function get_register(){
	 	return View::make('snack.outer.register'); 
	}

	public function do_register(){ 
 		$validation = $this->user->validator();

	    if ($validation->passes()) {
	        // validation has passed, save user in DB
	    	$this->user->createUser();
	    	return Redirect::to('/')
	    		->with('message', 'Thanks for registering!');
	    } else {
	        // validation has failed, display error messages    
	    	return Redirect::to('/register')
		    	->with('message', 'The following errors occurred')
		    	->withErrors($validation)
		    	->withInput();
	    }
	}

	public function logout(){
		Auth::logout();
		Session::flush();
		return Redirect::to('/');
	}

}
