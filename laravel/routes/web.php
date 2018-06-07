<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/','Admin\IndexController')->middleware('auth');//网站入口文件

//后台路由管理
Route::group(['middleware' => ['auth']], function () {
	    Route::namespace('Admin')->group(function(){
			Route::prefix('/admin')->group(function(){
		    	//后台首页
		    	Route::resource('/index','IndexController');
		    		// 权限验证中间件
		    		Route::group(['middleware' => ['checkPermission']], function () {
			    			//用户管理模块
			    			Route::prefix('/user_manage')->group(function(){
				    			//管理员管理
							   	Route::resource('/user','UserController');
							   	//角色管理
							   	Route::resource('/role','RoleController');
			    			});

			    			//系统配置模块
			    			Route::prefix('/system_config')->group(function(){
			    				//系统配置
			    				Route::resource('/system','SystemController');
			    				//操作日志
			    				Route::resource('/operation_log','OperationLogController');
			    			});

					});
			});
		});
});



