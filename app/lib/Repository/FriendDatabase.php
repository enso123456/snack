<?php namespace Lib\Repository;

use Lib\Repository\FriendInterface;

use Friend,User,DB;

class FriendDatabase implements FriendInterface{

	public function add_friend($user_id,$friend_id){
		$friend = new Friend;

		$friend->user_id = $user_id;
		$friend->friend_id = $friend_id;

		$friend->save();
	}

	public function unfriend($friend_id){
		$friend = Friend::where('friend_id','=',$friend_id);
		$friend->delete();
	}

	public function view_friend($id){
		return User::find($id);
	}

	public function my_friends($id){
		return User::join('friends','users.id','=','friend_id')
			->where('user_id','=',$id)
			->get();
	}

	public function find_friends($id){
		$my_friends = Friend::where('user_id','=',$id)->lists('friend_id');
		$merge = array_merge($my_friends,array($id));
		$find_not_my_friends = User::whereNotIn('id',$merge)->get();
		return $find_not_my_friends; 
	}

	public function check_if_myFriend($id){
		$my_friends = Friend::where('user_id','=',$id)->lists('friend_id');
		$merge = array_merge($my_friends,array($id));
		$my_friends = User::where('id',$merge)->get();
		return $my_friends;  
	}
}