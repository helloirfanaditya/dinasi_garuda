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

    // General
    Route::get('/setting', 'Admin\GeneralController@index')->name('admin.general');
    Route::post('/setting/logo-dark', 'Admin\GeneralController@logoDark')->name('admin.general-logo-dark');
    Route::post('/setting/logo-light', 'Admin\GeneralController@logoLight')->name('admin.general-logo-light');
    Route::post('/setting/logo-icon', 'Admin\GeneralController@logoSm')->name('admin.general.logo-sm');
    Route::post('/setting/favicon', 'Admin\GeneralController@logoFavicon')->name('admin.general.logo-favicon');
    Route::post('/setting/title', 'Admin\GeneralController@settingTitle')->name('admin.general.title');
    Route::post('/setting/app_url', 'Admin\GeneralController@settingAppUrl')->name('admin.general.app_url');
    Route::post('/setting/description', 'Admin\GeneralController@settingDescription')->name('admin.general.descrtipion');
    Route::post('/setting/phone', 'Admin\GeneralController@settingPhone')->name('admin.general.phone');
    Route::post('/setting/email', 'Admin\GeneralController@settingEmail')->name('admin.general.email');

    // General Header
    Route::post('/setting/header/title-header', 'Admin\GeneralController@titleHeader')->name('admin.general.title-header');
    Route::post('/setting/header/youtube-link', 'Admin\GeneralController@youtubeLink')->name('admin.general.youtube-link');

    // About
    Route::post('/setting/about/store', 'Admin\GeneralController@aboutStore')->name('admin.general.about-store');

    // Visi Misi
    Route::post('/setting/visi-misi/visi_page', 'Admin\GeneralController@visiPage')->name('admin.general.visi-page');
    Route::post('/setting/visi-misi/misi_page', 'Admin\GeneralController@misiPage')->name('admin.general.misi-page');

    Route::get('/logout', 'Admin\AuthController@logout');
});
