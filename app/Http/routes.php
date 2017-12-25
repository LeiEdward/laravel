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

// 第一個Route
Route::post('test', function(){
  echo 'POST';
});

// 第二個Route
Route::get('test', function(){
  echo '<form method="POST" action="test">';
  echo '<input type="hidden" name="_token" value="{{'. csrf_token() .'}}">';
  echo '<input type="submit">';
  echo '</form>';
});

// 第三個Route
Route::put('test', function() {
  echo 'PUT';
});
// 第四個Route
Route::delete('test', function() {
  echo 'DELETE';
});

Route::get('customer', function() {
  $customer = App\Customer::find(1); //抓一個

  echo $customer->name . "<br/>"; //可以這樣指定資料
  echo '<pre>'; //這個html tag 可讓array整齊好看
  print_r($customer);
});

Route::get('customer/{id}', function($id) { //這裡取得參數
  //根據id抓資料
  // $customer = App\Customer::find($id);

  //select * FROM `customer` WHERE `id` = $id  limit 1,1;
  $customer = App\Customer::where('id' ,'=' ,$id)->first();

  echo $customer->name . "<br/>";
});
