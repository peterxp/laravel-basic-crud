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
  return Redirect::route('news.index');
});

Route::get('news', array('as'=>'news.index', 'uses'=>'NewsController@Index'));
/*
  เห็น Route แล้ว เอาไปใช้ทำอะไรได้บ้าง 
  - news เอาไปทำเรียกใช้งานด้วย method get เช่น your-url/news
  - news.index เอาไว้เด้งหน้า เด้งหลัง หรือ redirect 
  - NewsController@Index อธิบายว่า ต่อไปนี้นะ ถ้าคุณเรียก your-url/news ฉันจะไปทำงานที่ Controller ชื่อ NewsController และ method ชื่อ Index 
    จะสังเกตุได้ว่า controller@method นะสิบอกให่
*/

Route::get('news/show/{id?}', array('as'=>'news.show', 'uses'=>'NewsController@show'));
Route::get('news/create', array('as'=>'news.create', 'uses'=>'NewsController@create'));
Route::get('news/edit/{id?}', array('as'=>'news.edit', 'uses'=>'NewsController@edit'));
Route::get('news/destroy/{id?}', array('as'=>'news.destroy', 'uses'=>'NewsController@destroy'));
Route::post('news/store', array('as'=>'news.store', 'uses'=>'NewsController@store'));
Route::post('news/update/{id?}', array('as'=>'news.update', 'uses'=>'NewsController@update'));

# Route for login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

# Route for process the form
Route::post('login', array('uses'=>'HomeController@doLogin'));