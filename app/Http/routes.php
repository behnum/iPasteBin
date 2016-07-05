<?php
// Get
Route::get('/',       		'pagesController@home'	);
Route::get('/about',	  	'pagesController@about'	);
Route::get('/note/{note}',	'pagesController@show'	);

// Post
Route::post('/',			'pagesController@save'	); 	// Save
Route::post('/note/{note}',	'pagesController@update'); 	// Update
