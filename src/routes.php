<?php

Route::group(array('namespace' => 'Klisl\Statistics\Controllers'), function() {

    Route::get('/statistics',['uses' =>'StatController@index'])->name('statistics');

});