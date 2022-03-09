<?php
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', 'Admin\AuthController@login');
Route::post('/admin/login', 'Admin\AuthController@doLogin')->name('admin.login.store');

Route::group(['prefix' => 'admin', 'middleware' => 'Admin-Permission'], function () {
    Route::get('/', 'Admin\HomeController@redirect');
    Route::get('/dashboard', 'Admin\HomeController@index');

    // List Admin
    Route::get('/list-admin', 'Admin\AuthController@listAdmin')->name('admin.list-admin');
    Route::get('/list-admin/table', 'Admin\AuthController@listAdminTable');

    // My Account
    Route::get('/my-account', 'Admin\AuthController@myAccount')->name('admin.my-account');
    Route::post('/my-account', 'Admin\AuthController@myAccountStore')->name('admin.my-account.store');

    // Add Admin
    Route::get('/add-admin', 'Admin\AuthController@addAdmin')->name('admin.add-admin');
    Route::post('/add-admin', 'Admin\AuthController@addAdminStore')->name('admin.add-admin.store');

    // Kingdom
    Route::get('/kingdom', 'Admin\KingdomController@index')->name('admin.kingdom');
    Route::get('/kingdom/table', 'Admin\KingdomController@kingdomTable');
    Route::get('/kingdom/create', 'Admin\KingdomController@create')->name('admin.kingdom.create');
    Route::post('/kingdom/create', 'Admin\KingdomController@store')->name('admin.kingdom.store');
    Route::get('/kingdom/edit/{id}', 'Admin\KingdomController@edit')->name('admin.kingdom.edit');
    Route::post('/kingdom/edit/{id}', 'Admin\KingdomController@update')->name('admin.kingdom.update');
    Route::get('/kingdom/delete/{id}', 'Admin\KingdomController@delete')->name('admin.kingdom.delete');

    // Collection
    Route::get('/collection', 'Admin\CollectionController@index')->name('admin.collection');
    Route::get('/collection/table', 'Admin\CollectionController@collectionTable');
    Route::get('/collection/create', 'Admin\CollectionController@create')->name('admin.collection.create');
    Route::post('/collection/create', 'Admin\CollectionController@store')->name('admin.collection.store');
    Route::get('/collection/edit/{id}', 'Admin\CollectionController@edit')->name('admin.collection.edit');
    Route::post('/collection/update/{id}', 'Admin\CollectionController@update')->name('admin.collection.update');
    Route::get('/collection/delete/{id}', 'Admin\CollectionController@delete')->name('admin.collection.delete');

    // Collection Category
    Route::get('/collection/category/create', 'Admin\CollectionController@createCategory')->name('admin.collection.category.create');
    Route::post('/collection/category/store', 'Admin\CollectionController@storeCategory')->name('admin.collection.category.store');
    Route::get('/collection/category/table', 'Admin\CollectionController@collectionCategoryTable');
    Route::get('/collection/category/edit/{id}', 'Admin\CollectionController@editCategory')->name('admin.collection.category.edit');
    Route::post('/collection/category/update/{id}', 'Admin\CollectionController@updateCategory')->name('admin.collection.category.update');
    Route::get('/collection/category/delete/{id}', 'Admin\CollectionController@deleteCategory')->name('admin.collection.category.delete');

    // Events
    Route::get('/event', 'Admin\EventController@index')->name('admin.event');
    Route::get('/event/table', 'Admin\EventController@eventTable')->name('admin.event.table');
    Route::get('/event/create', 'Admin\EventController@create')->name('admin.event.create');
    Route::post('/event/create', 'Admin\EventController@store')->name('admin.event.store');
    Route::get('/event/edit/{id}', 'Admin\EventController@edit')->name('admin.event.edit');
    Route::post('/event/update/{id}', 'Admin\EventController@update')->name('admin.event.update');
    Route::get('/event/delete/{id}', 'Admin\EventController@delete')->name('admin.event.delete');

    // News
    Route::get('/news', 'Admin\NewsController@index')->name('admin.news');
    Route::get('/news/table', 'Admin\NewsController@newsTable');
    Route::get('/news/create', 'Admin\NewsController@create')->name('admin.news.create');
    Route::post('/news/store', 'Admin\NewsController@store')->name('admin.news.store');
    Route::get('/news/edit/{id}', 'Admin\NewsController@edit')->name('admin.news.edit');
    Route::post('/news/update/{id}', 'Admin\NewsController@update')->name('admin.news.update');
    Route::get('/news/delete/{id}', 'Admin\NewsController@delete')->name('admin.news.delete');

    Route::get('/logout', 'Admin\AuthController@logout');
});
