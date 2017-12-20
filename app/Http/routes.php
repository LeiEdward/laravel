<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{id}', function ($id) {
  return 'User: '.$id;
});

// Route::get('user/{name?}', function ($name = 'John') {
//   return $name;
// });

// Route::get('user/{name}', function ($name) {
//   return $name;
// })
// ->where('name', '[A-Za-z]+');

// Route::get('user/{id}/{name}', function ($id, $name) {
//   return $name;
// })
// ->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// Route::get('user/profile', 'UserController@showProfile')->name('profile');

// Route::get('/profile', function() {
//   return 'profile';
// });
