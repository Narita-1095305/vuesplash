<?php

Route::get('/{any?}', fn() => view('index'))->where('any', '.+');

Route::get('/photos/{photo}/download', 'PhotoController@download');