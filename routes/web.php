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
use MongoDB\Client as Mongo;

Route::get('mongo', function(Request $request) {
    $collection = (new Mongo)->edcuation->questions;
    return $collection->find()->toArray();
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



// Dashboard routes
// Main page
Route::get('/dashboard','dashboardController@main');

// Users Routes :
Route::get('/dashboard/users','usersController@list');
Route::get('/dashboard/users/create','usersController@create');
Route::post('/dashboard/users/add','usersController@add');
Route::get('/dashboard/users/update/{id}','usersController@update');
Route::post('/dashboard/users/update','usersController@modify');
Route::delete('/dashboard/users/delete','usersController@delete');

// Posts Routes :
Route::get('/dashboard/posts','postsController@list');
Route::get('/dashboard/posts/create','postsController@create');
Route::post('/dashboard/posts/add','postsController@add');
Route::get('/dashboard/posts/update/{id}','postsController@update');
Route::post('/dashboard/posts/update','postsController@modify');
Route::delete('/dashboard/posts/delete','postsController@delete');


// Comments Routes :
Route::get('/dashboard/comments','commentsController@list');
Route::get('/dashboard/comments/create','commentsController@create');
Route::post('/dashboard/comments/add','commentsController@add');
Route::get('/dashboard/comments/update/{id}','commentsController@update');
Route::post('/dashboard/comments/update','commentsController@modify');
Route::delete('/dashboard/comments/delete','commentsController@delete');


// Replies Controller :
Route::get('/dashboard/replies','repliesController@list');
Route::get('/dashboard/replies/create','repliesController@create');
Route::post('/dashboard/replies/add','repliesController@add');
Route::get('/dashboard/replies/update/{id}','repliesController@update');
Route::post('/dashboard/replies/update','repliesController@modify');
Route::delete('/dashboard/replies/delete','repliesController@delete');

// Sections Routes :
Route::get('/dashboard/sections','sectionsController@list');
Route::get('/dashboard/sections/create','sectionsController@create');
Route::post('/dashboard/sections/add','sectionsController@add');
Route::get('/dashboard/sections/update/{id}','sectionsController@update');
Route::post('/dashboard/sections/update','sectionsController@modify');
Route::delete('/dashboard/sections/delete','sectionsController@delete');





// Main routes :
Route::get('/sections','mainController@sections');
Route::get('/section/{id}/posts','mainController@posts');
Route::get('/post/{id}','mainController@post');
Route::get('/section/{id}/createpost','mainController@create_post');
Route::post('/add_post','mainController@add_post');



Route::get('/home', 'HomeController@index')->name('home');
