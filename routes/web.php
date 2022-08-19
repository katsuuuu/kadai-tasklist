<?php

// デフォルトのコメント部分は省略

Route::get('/', 'TaskController@index');

Route::resource('tasks', 'TaskController');