<?php 

use Lib\Repository\UsersInterface; 
use Lib\Repository\FriendInterface; 

class UserController extends BaseController{

	protected $session_id;

	public function __construct(UsersInterface $user,FriendInterface $friend){
		$this->user = $user;
		$this->session_id = Session::get('id');	
		$this->friend = $friend;
	}

	public function profile(){
		$profile = $this->user->getUserById($this->session_id); 
		$my_friends = $this->friend->my_friends($this->session_id);
		return View::make('snack.inner.profile')->with( array('profile' => $profile,'my_friends' => $my_friends));
	}

	public function view_profile($id){
		$profile = $this->user->getUserById($id); 
		$my_friends = $this->friend->my_friends($id); 
		$all_users = $this->friend->find_friends($id); 
		return View::make('snack.inner.view_profile')->with( 
			array(
				'profile' => $profile,
				'my_friends' => $my_friends,
				'check_if_myFriend' => $all_users
			));
	}

	public function edit_profile($id){
		$profile = $this->user->getUserById($this->session_id);
		return View::make('snack.inner.edit_profile')->with( array('profile' => $profile));
	}

	public function update_profile($id){ 
		$id = $this->session_id;
		$validation = $this->user->user_validation(); 
		if( $validation->fails()){  
			return Redirect::to('/edit-profile/'. $id)
	    		->withInput();
		}else{ 
			$this->user->updateUser($id);
			return Redirect::to('/profile');
		}
	}

	public function myFriends(){
		$id = $this->session_id;
		$my_friends = $this->friend->my_friends($id); 
		return View::make('snack.inner.my_friends')->with( array('my_friends' => $my_friends));
	}

	public function findFriends(){
		$id = $this->session_id;
		$all_users = $this->friend->find_friends($id); 
		return View::make('snack.inner.find_friends')->with( array('my_friends' => $all_users));
	}

	public function add_friend($id){  
		$user_id = $this->session_id;
		$this->friend->add_friend($user_id,$id); 
		return Redirect::to('/my-friend');
	}
	
	public function un_friend($id){
		$this->friend->unfriend($id);
		return Redirect::to('/my-friend');
	}
}