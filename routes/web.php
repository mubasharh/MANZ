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

Route::get('/test', function () {
    return MANZ\categories::find(1)->project;
});


Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addclient', 'clientController@create')->name('addclient');
Route::post('/client/store', 'clientController@store')->name('client.store');
Route::get('/clients', 'clientController@index')->name('clients');



Route::get('client/edit/{id}',[
	'uses' => 'clientController@edit',
	'as' => 'client.edit'
]);

Route::get('client/delete/{id}',[
	'uses' => 'clientController@destroy',
	'as' => 'client.delete'
]);

// Categories 

Route::get('categories',[
	'uses' => 'CategoriesController@index',
	'as' => 'categories'
]);
Route::get('addcategory',[
	'uses' => 'CategoriesController@create',
	'as' => 'addcategory'
]);

Route::post('category/store',[
	'uses' => 'CategoriesController@store',
	'as' => 'category.store'
]);

Route::get('category/delete/{id}',[
	'uses' => 'CategoriesController@destroy',
	'as' => 'category.delete'
]);

Route::get('category/edit/{id}',[
	'uses' => 'CategoriesController@edit',
	'as' => 'category.edit'
]);
Route::post('category/update/{id}',[
	'uses' => 'CategoriesController@update',
	'as' => 'category.update'
]);
// Projects
Route::get('projects',[
	'uses' => 'ProjectsController@index',
	'as' => 'projects'
]);
Route::get('addproject',[
	'uses' => 'ProjectsController@add',
	'as' => 'addproject'
]);
// save Project
Route::post('project/store',[
	'uses' => 'ProjectsController@store',
	'as' => 'project.store'
]);

Route::get('project/delete/{id}',[
	'uses' => 'ProjectsController@destroy',
	'as' => 'project.delete'
]);
Route::get('project/edit/{id}',[
	'uses' => 'ProjectsController@edit',
	'as' => 'project.edit'
]);

Route::post('project/update/{id}',[
	'uses' => 'ProjectsController@update',
	'as' => 'project.update'
]);



