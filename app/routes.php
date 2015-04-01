<?php
 
Route::get('/',['before' => 'has_session' , 'uses' => 'HomeController@get_login'] );

Route::post('/do-login', 'HomeController@do_Login');

Route::post('/register','HomeController@do_register');

Route::get('/register','HomeController@get_register');

Route::get('/do-logout','HomeController@logout');

Route::get('/profile', ['before' => 'is_logged_in' , 'uses' => 'UserController@profile' ]);

Route::get('/view-profile-friend/{id}','UserController@view_profile' );

Route::get('/edit-profile/{id}',  ['before' => 'is_logged_in' , 'uses' =>  'UserController@edit_profile'] );  

Route::post('/update_profile/{id}','UserController@update_profile' ); 
 
Route::get('/my-friend', ['before' => 'is_logged_in' , 'uses' =>  'UserController@myFriends'] );

Route::get('/add-friend/{id}', ['before' => 'is_logged_in' , 'uses' =>  'UserController@add_friend' ] );

Route::get('/find-friend', ['before' => 'is_logged_in' , 'uses' => 'UserController@findFriends' ]);

Route::get('/un-friend/{id}', ['before' => 'is_logged_in' , 'uses' => 'UserController@un_friend' ]);
