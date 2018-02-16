<?php


Route::get('/', 'PostsController@index');


// controller => PostsController

// Eloquent Model => Post

// migration => create_posts_table

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

