<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group([], function () {
    // Route::get('/home', 'HomeController@index');
    Route::auth();
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' => ['web','auth']], function ($router) {
    $router->get('/', 'IndexController@index');
    $router->get('/i18n', 'IndexController@dataTableI18n');

	/**
	 * 用户路由
	 */
	$router->group(['prefix' => 'user'], function($router){
		$router->get('ajaxIndex', 'UserController@ajaxIndex');
		$router->get('/{id}/mark/{status}', 'UserController@mark')
			   ->where([
			   	'id' => '[0-9]+',
			   	'status' => config('admin.global.status.trash').'|'.
			   				config('admin.global.status.audit').'|'.
			   				config('admin.global.status.active')
			  	]);
		$router->get('/{id}/reset','UserController@changePassword')->where(['id' => '[0-9]+']);
		$router->post('reset','UserController@resetPassword');
	});
	$router->resource('user', 'UserController');

	/**
	 * 权限路由
	 */
	$router->group(['prefix' => 'permission'], function($router){
		$router->get('ajaxIndex', 'PermissionController@ajaxIndex');
		$router->get('/{id}/mark/{status}', 'PermissionController@mark')
			   ->where([
			   	'id' => '[0-9]+',
			   	'status' => config('admin.global.status.trash').'|'.
			   				config('admin.global.status.audit').'|'.
			   				config('admin.global.status.active')
			  	]);
	});
	$router->resource('permission', 'PermissionController');

	/**
	 * 菜单路由
	 */
	$router->group(['prefix' => 'menu'], function($router){
		$router->get('sort', 'MenuController@sort');
		$router->get('/{id}/mark/{status}', 'MenuController@mark')
			   ->where([
			   	'id' => '[0-9]+',
			   	'status' => config('admin.global.status.trash').'|'.
			   				config('admin.global.status.audit').'|'.
			   				config('admin.global.status.active')
			  	]);
	});
	$router->resource('menu', 'MenuController');

	/**
	 * 角色路由
	 */
	$router->group(['prefix' => 'role'], function($router){
		$router->get('ajaxIndex', 'RoleController@ajaxIndex');
		$router->get('/{id}/mark/{status}', 'RoleController@mark')
			   ->where([
			   	'id' => '[0-9]+',
			   	'status' => config('admin.global.status.trash').'|'.
			   				config('admin.global.status.audit').'|'.
			   				config('admin.global.status.active')
			  	]);
	});
	$router->resource('role', 'RoleController');
});
