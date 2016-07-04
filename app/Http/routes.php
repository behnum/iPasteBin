<?php
// Get
Route::get('/',       	'pagesController@home');
Route::get('/about',  	'pagesController@about');

// Post
Route::post('/',	'pagesController@save');
