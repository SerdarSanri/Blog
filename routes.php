<?php

Route::get('(:bundle)', 'blog::post@index');
Route::get('(:bundle)/view/(:any)', 'blog::post@view');