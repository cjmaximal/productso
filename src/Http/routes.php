<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('category/{slug?}', 'cjmaximal\productso\Http\Controllers\PrsoCategoryController@show');
});