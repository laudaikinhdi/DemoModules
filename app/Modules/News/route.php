<?php
$namespaceNew = 'App\Modules\News\Controllers';
Route::group(['module' => 'News', 'namespace' => $namespaceNew],
    function(){
        Route::get('news', 'NewController@index')->name('index');
    }
);
