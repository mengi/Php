<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('homePage.layout');
});

Route::post('homePage/iletisim', array('as' => 'homePage/iletisim', 'uses' => 'RequestController@newrequest'));

Route::get('helper', function() { return View::make('user.helper'); });


// YÖNETİCİ YÖNLENDİRMELERİ

Route::get('admin/login', function() { return View::make('admin.login'); });

Route::post('admin/login', array('as' => 'admin/login', 'uses' => 'AdminController@postLogin'));

Route::group(array('before' => 'admin'), function() //auth
{
	Route::get('admin/admin_add', function() { return View::make('admin.admin_add'); });

	Route::post('admin/admin_add', array('as' => 'admin/admin_add', 'uses' => 'AdminController@postCreate'));

	Route::get('admin/profile', array('as' => 'admin/profile', 'uses' => 'AdminController@Index'));
	
	Route::get('admin/users', array('as' => 'admin/users', 'uses' => 'AdminController@user_list'));
	
	Route::get('admin/user_add', function() { return View::make('admin.user_add'); });

	Route::post('admin/user_add', array('as' => 'admin/user_add', 'uses' => 'AdminController@user_add'));
	
	Route::get('admin/request', array('as' => 'admin/request', 'uses' => 'AdminController@request'));

	Route::get('admin/confirm_waiting_humours', array('as' => 'admin/confirm_waiting_humours', 'uses' => 'AdminController@confirm_waiting_humours'));
	
	Route::get('admin/admins', array('as' => 'admin/admins', 'uses' => 'AdminController@admin_list'));

	Route::get('admin/humours_ignore', array('as' => 'admin/humours_ignore', 'uses' => 'AdminController@humours_ignore'));

	Route::get('admin/humours', array('as' => 'admin/humours', 'uses' => 'AdminController@humours'));

	Route::get('admin/user_confirm', array('as' => 'admin/user_confirm', 'uses' => 'AdminController@confirm_list'));
	
	Route::get('admin/admindetails/{id}', array('as' => 'admindetails', 'uses' => 'AdminController@admindetails'));
	
	Route::get('admin/userdetails/{id}', array('as' => 'userdetails', 'uses' => 'AdminController@userdetails'));
	
	Route::get('admin/confirm/{id}', array('as' => 'confirms', 'uses' => 'AdminController@confirm'));

	Route::get('admin/humour_confirm/{id}', array('as' => 'humour_confirm', 'uses' => 'AdminController@humour_confirm'));

	Route::get('admin/humour_ignore/{id}', array('as' => 'humour_ignore', 'uses' => 'AdminController@humour_ignore'));
	
	Route::get('admin/humours_confirm/{id}', array('as' => 'humours_confirm', 'uses' => 'AdminController@humours_confirm'));

	Route::get('admin/humours_ignore/{id}', array('as' => 'humours_ignore', 'uses' => 'AdminController@humours_ignores'));
	
	Route::get('admin/ignore/{id}', array('as' => 'ignore', 'uses' => 'AdminController@user_ignore'));
	
	Route::get('admin/admin_ignore/{id}', array('as' => 'admin_ignore', 'uses' => 'AdminController@admin_ignore'));
	
	Route::post('admin/adminupdate', array('as' => 'adminupdate', 'uses' => 'AdminController@adminupdate'));
	
	Route::post('admin/userupdate', array('as' => 'admin/userupdate', 'uses' => 'AdminController@userupdate'));
	
	Route::get('admin/user_ignore/{id}', array('as' => 'user_ignore', 'uses' => 'AdminController@user_ignore'));
	
	Route::get('admin/commentdetails/{id}', array('as' => 'commentdetails', 'uses' => 'AdminController@commentdetails'));
	
	Route::post('admin/commentupdate', array('as' => 'admin/commentupdate', 'uses' => 'AdminController@commentupdate'));
	
	Route::post('admin/password_update', array('as' => 'password_update', 'uses' => 'AdminController@password_update'));
	
	Route::post('admin/user_password_update', array('as' => 'user_password_update', 'uses' => 'AdminController@user_password_update'));
	
	Route::get('admin/comment/{id}', array('as' => 'comment_ignore', 'uses' => 'AdminController@comment_ignore'));
	
	Route::get('admin/image_ignore/{id}', array('as' => 'image_ignore', 'uses' => 'AdminController@image_ignore'));
	
	Route::get('admin/request_ignore/{id}', array('as' => 'request_ignore', 'uses' => 'AdminController@request_ignore'));

	Route::get('admin/user_pdf', array('as' => 'admin/user_pdf', 'uses' => 'AdminController@user_pdf'));

	Route::get('admin/logout', array('as' => 'admin/logout', 'uses' => 'AdminController@logout'));
});



// USER YÖNLENDİRMELERİ

Route::get('login', function() { return View::make('user.login'); });

Route::post('login', array('as' => 'login', 'uses' => 'UserController@postLogin'));

Route::get('user/register', function() { return View::make('user.register'); });

Route::post('user/register', array('as' => 'user/register', 'uses' => 'UserController@postCreate'));

Route::group(array('before' => 'auth', 'before' => 'user'), function()
{
	
	Route::get('user/profile', array('as' => 'user/profile', 'uses' => 'UserController@Index'));

	Route::get('friends', array('as' => 'friends', 'uses' => 'HomeController@friends'));

	Route::get('user/detail/{id}', array('as' => 'detail', 'uses' => 'UserController@detail'));

	Route::get('user/confirm/{id}', array('as' => 'confirm', 'uses' => 'CommentsController@confirm'));

	Route::get('user/update/{id}', array('as' => 'update', 'uses' => 'CommentsController@update'));

	Route::post('user/comment_update', array('as' => 'user/comment_update', 'uses' => 'CommentsController@comment_update'));

	Route::get('user/humour', array('as' => 'user/humour', 'uses' => 'HumourController@Index'));

	Route::post('user/humour', array('as' => 'user/humour', 'uses' => 'HumourController@new_humour'));

	Route::get('user/delete/{id}', array('as' => 'delete', 'uses' => 'CommentsController@delete'));

	Route::post('newComment', array('as' => 'newComment', 'uses' => 'CommentsController@newComment'));

	Route::get('user/{id}/yorumlar', array('as' => 'yorumlar', 'uses' => 'CommentsController@comments'));

	Route::get('user/mycomments', array('as' => 'user/mycomments', 'uses' => 'UserController@mycomments'));

	Route::get('user/confirm_waiting', array('as' => 'user/confirm_waiting', 'uses' => 'UserController@confirm_waiting'));

	Route::get('user/confirmed_comments', array('as' => 'user/confirmed_comments', 'uses' => 'CommentsController@confirmed_comment'));	

	Route::get('user/information', function() { return View::make('user.personal_information_edit'); });

	Route::post('user/information_update', array('as' => 'information_update', 'uses' => 'UserController@information_update'));

	Route::post('user/password_update', array('as' => 'password_update', 'uses' => 'UserController@password_update'));

	Route::get('user/gallery', array('as' => 'gallery', 'uses' => 'PhotoController@gallery'));

	Route::post('user/file_uploads', array('as'=> 'user/file_uploads', 'uses' => 'PhotoController@file_upload'));

	Route::get('user/image_list', array('as'=> 'user/image_list', 'uses' => 'PhotoController@image_list'));

	Route::get('user/image_list/{id}', array('as'=> 'user/image_delete', 'uses' => 'PhotoController@image_delete'));

	Route::get('user/galery/{id}', array('as'=> 'user/profile_pic_change', 'uses' => 'PhotoController@profile_picture_change'));

	Route::get('user/detail/{id}/gallery', array('as' => 'detail/gallery', 'uses' => 'PhotoController@friend_gallery'));

	Route::get('user/request_complaint', function() { return View::make('user.request_complaint'); });

	Route::post('user/request_complaint', array('as' => 'user/request_complaint', 'uses' => 'RequestController@user_newrequest'));

	Route::get('user/my_did_comments', array('as' => 'user/my_did_comments', 'uses' => 'UserController@my_did_comments'));

	Route::get('logout', array('as' => 'logout', 'uses' => 'UserController@logout'));

});
