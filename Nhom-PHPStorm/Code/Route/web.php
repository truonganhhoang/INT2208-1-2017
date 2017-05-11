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

// Route::get('/', function () {
//     return view('welcome');
// });

// Access from url
Route::get('/', 'PageController@home');
Route::get('/list', 'PageController@list');
Route::get('/list/{id_type}', ['as' => 'question', 'uses' =>'PageController@questionType1']);
Route::get('/user', 'PageController@user');
Route::get('/addQuestion', 'PageController@addQuestion');

// Route::get('/homepage', function() {
// 	return view('templates.home');
// });

// Route::get('/list', function() {
// 	return view('templates.list');
// });

// Route::get('/q1', function() {
// 	return view('templates.questionType1');
// });
Auth::routes();

// Route::get('/home', 'HomeController@index');

// Question
Route::post('/addQuestion/add', 'QuestionController@add');
Route::post('delete/{id_question}', [ 'as' => 'delete', 'uses' => 'QuestionController@delete']);
Route::get('/questionList/{id_type}', [ 'as' => 'questionList', 'uses' => 'QuestionController@questionList']);

//User Management
Route::get('setAdmin/{id_user}',[ 'as' => 'setAdmin', 'uses' =>'UserController@setAdmin' ]);
Route::get('setQuestionaire/{id_user}',[ 'as' => 'setQuestionaire', 'uses' =>'UserController@setQuestionaire' ]);
Route::get('deleteUser/{id_user}',[ 'as' => 'deleteUser', 'uses' =>'UserController@deleteUser' ]);


