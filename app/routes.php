<?php

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

#RoomsController
Route::get('room_share_available', ['as' => 'room_share_available', 'uses' => 'RoomsController@index']);
Route::get('room_share_available/{id}/{name}', ['as' => 'room_share_available.show', 'uses' => 'RoomsController@show']);

#HousesController
Route::get('house_share_available', ['as' => 'house_share_available', 'uses' => 'HousesController@index']);
Route::get('house_share_available/{id}/{name}', ['as' => 'house_share_available.show', 'uses' => 'HousesController@show']);

#FeedsController
Route::get('latest_feeds', ['as' => 'latest_feeds', 'uses' => 'FeedsController@feed']);

Route::filter('admin', function(){
    if(!Auth::check())
    {
        return Redirect::to('/login');
    }
});

Route::get('/login', ['as' =>'login', 'uses' => 'SessionsController@create']);
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::post('user.store', ['as' => 'user.store', 'uses' => 'SessionsController@store']);
Route::get('/register', ['as' => 'register', 'uses' => 'RegisterController@create']);
Route::post('/register', ['as' => 'register.store', 'uses' => 'RegisterController@store']);

Route::group(array('before' => 'admin'), function(){

    Route::get('room_share', ['as' => 'room_share', 'uses' => 'RoomsController@create']);
    Route::post('room_save', ['as' => 'room_save', 'uses' => 'RoomsController@store']);
});