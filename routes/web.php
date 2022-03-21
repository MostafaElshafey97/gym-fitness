<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/map', function () {
    return view('map');
});
Route::get('/dashboard','SommaireController@index')->name('dashboard');
Route::get('my-home', 'HomeController@myHome');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/lougoutadmin', 'AdminsController@lougoutadmin')->name('lougoutadmin');
Route::post('/logg', 'Auth\LoginController@authenticated');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('redirect', 'SocialController@redirect');
Route::get('register_company','Auth\RegisterController@register_company')->name('register_company');
Route::get('/Gym-Company','GymRoomController@index')->name('Gym-Company');

Route::get('register_user','Auth\RegisterController@register_user')->name('register_users');
Route::post('register_use','Auth\RegisterController@register_use')->name('register_use');

Route::get('/users','UserController@Dashboard')->name('users');
//Route::get('/users_dashbordUI','UserController@Dashboard')->name('users_dashbordUI');

Route::get('/users_dashbordbeehive','UserController@Dashboard')->name('users_dashbordbeehive');
Route::get('/people','UserController@people')->name('people');

/******************route Clubs************************* */
Route::get('/groups-change/{id}','ClubsController@groups')->name('groups-change');
Route::get('/members-james','ClubsController@membersjames')->name('members-james');

Route::get('/login-groups','ClubsController@login-groups')->name('login-groups');

Route::get('/addPost_clubs','ClubsController@create')->name('addPost_clubs');

Route::get('/allPost-clubs/{id}','ClubsController@allPostclubs')->name('allPost-clubs');
Route::get('/allEvent-clubs/{id}','ClubsController@allEventclubs')->name('allPost-clubs');

Route::get('/addEvent_clubs','ClubsController@addEvent_clubs')->name('addEvent_clubs');

/****************** end route Clubs************************* */

/******************route  roompassgym */

Route::get('/homepassgym','GymRoomController@index')->name('homepassgym');



Route::get('/Clubs','UserController@Clubs')->name('Clubs');
Route::get('/home_social','PostController@index')->name('home_social');
Route::get('/home_social_ui','PostController@index')->name('home_social_ui');

Route::get('/add-social-post','PostController@create')->name('add-social-post');
Route::post('/Post_store','PostController@store')->name('Post_store');

Route::get('/read_more/{id}','PostController@read_more')->name('read_more');
Route::post('','Auth\RegisterController@store')->name('register');
Route::get('/exercices', 'ExerciceController@index')->name('exercices');
Route::get('/create_exercice', 'ExerciceController@create')->name('create_exercice');
Route::post('/exercice_store', 'ExerciceController@store')->name('exercice_store');
Route::get('/admin-login','AdminsController@index')->name('admin-login');
Route::post('/ad-login','AdminsController@adlogin')->name('ad-login');
Route::get('/musclelist', 'MmuscleController@musclelist');
Route::get('/getstatelist', 'RegionController@getStates');
Route::get('/customers-liste', 'UserController@index')->name('customers-liste');
Route::get('/customers-liste', 'UserController@index')->name('customers-liste');
Route::get('/rooms-liste', 'UserController@index')->name('rooms-liste');





