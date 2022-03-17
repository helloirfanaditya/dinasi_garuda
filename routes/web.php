<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Landing\HomeController@index')->name('home');
Route::post('/send-message', 'Landing\HomeController@sendMessage')->name('send.message');

// Kingdom
Route::get('/kingdom', 'Landing\HomeController@kingdom')->name('kingdom');
Route::get('/kingdom/{id}', 'Landing\HomeController@kingdomDetail')->name('kingdom.detail');

Route::get('/collection', 'Landing\HomeController@collection')->name('collection');
Route::get('/collection/{id}', 'Landing\HomeController@CollectionDetail')->name('collection.detail');

Route::get('/news', 'Landing\HomeController@news')->name('news');
Route::get('/news/{id}', 'Landing\HomeController@newsDetail')->name('news.detail');

Route::get('/event', 'Landing\HomeController@event')->name('event');
Route::get('/event/{id}', 'Landing\HomeController@eventDetail')->name('event.detail');

Route::get('/about-us', 'Landing\HomeController@about')->name('about');

Route::get('/privacy-policy', 'Landing\HomeController@privacy')->name('privacy');

Route::get('/terms', 'Landing\HomeController@term')->name('term');
// 0Vo5u4$mLQ
