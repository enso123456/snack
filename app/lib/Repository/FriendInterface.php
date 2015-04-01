<?php namespace Lib\Repository;

interface FriendInterface{	

	public function add_friend($user_id,$friend_id);

	public function unfriend($id);

	public function view_friend($id); 

	public function my_friends($id);

	public function find_friends($id);
}