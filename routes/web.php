<?php

Route::get('/', function () {
    return redirect('/admin');
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('postingbaru', 'PostingBaruController@index');
    Route::get('analisis', 'AnalisisController@index');
    Route::get('influencer', 'InfluencerController@index');
    Route::get('trash', 'TrashController@index');
    Route::get('export', 'ExportController@index');
});
