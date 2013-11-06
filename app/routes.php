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


Route::get('news', array('as'=>'news.index', 'uses'=>'NewsController@Index'));
Route::get('news/show/{id?}', array('as'=>'news.show', 'uses'=>'NewsController@show'));
Route::get('news/create', array('as'=>'news.create', 'uses'=>'NewsController@create'));
Route::get('news/edit/{id?}', array('as'=>'news.edit', 'uses'=>'NewsController@edit'));
Route::get('news/destroy/{id?}', array('as'=>'news.destroy', 'uses'=>'NewsController@destroy'));
Route::post('news/store', array('as'=>'news.store', 'uses'=>'NewsController@store'));
Route::post('news/update/{id?}', array('as'=>'news.update', 'uses'=>'NewsController@update'));


Route::get('cache', function(){
  Cache::put('key', 'value', 1979);
  phpinfo();
});


Route::get('/', function()
{
  return View::make('hello');

});
