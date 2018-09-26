<?php
$namespace = 'App\Modules\Category\Controllers';
Route::group(['module' => 'Category', 'namespace' => $namespace],
    function(){
        Route::get('category', 'CategoryController@index')->name('index');
    }
);
