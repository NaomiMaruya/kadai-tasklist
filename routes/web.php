<?php

Route::get('/', function () {
    return view('welcome');
});


Route::resource('tasks', 'TasksController');

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');