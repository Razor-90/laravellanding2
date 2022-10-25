<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>'web'], function (){
    Route::match(['get', 'post'],'/', ['uses'=>'IndexController@execute', 'as'=>'home']);
    Route::get('/page/{alias}', ['uses'=>'PageController@execute', 'as'=>'page']);

    Route::auth();
});

Route::get(['prefix'=>'admin', 'middleware'=>'auth'], function (){

    Route::get('/', function (){

    });

    Route::group(['prefix'=>'pages'], function(){
        Route::get('/', ['uses'=>'PagesContoller@execute', 'as'=>'pages']);
        Route::match(['get', 'post'], '/add', ['uses'=>'PagesAddContoller@execute', 'as'=>'pagesAdd']);
        Route::match(['get', 'post', 'delete'], '/edit/{page}', ['uses'=>'PagesEditController@execute', 'as'=>'pagesEdit']);
    });

    Route::group(['prefix'=>'about'], function(){
        Route::get('/', ['uses'=>'AboutContoller@execute', 'as'=>'about']);
        Route::match(['get', 'post'], '/add', ['uses'=>'AboutAddContoller@execute', 'as'=>'aboutAdd']);
        Route::match(['get', 'post', 'delete'], '/edit/{about}', ['uses'=>'AboutEditController@execute', 'as'=>'aboutEdit']);
    });

    Route::group(['prefix'=>'services'], function(){
        Route::get('/', ['uses'=>'ServicesContoller@execute', 'as'=>'services']);
        Route::match(['get', 'post'], '/add', ['uses'=>'ServicesAddContoller@execute', 'as'=>'servicesAdd']);
        Route::match(['get', 'post', 'delete'], '/edit/{services}', ['uses'=>'ServicesEditController@execute', 'as'=>'servicesEdit']);
    });

    Route::group(['prefix'=>'pricing'], function(){
        Route::get('/', ['uses'=>'ServicesContoller@execute', 'as'=>'pricing']);
        Route::match(['get', 'post'], '/add', ['uses'=>'PricingAddContoller@execute', 'as'=>'pricingAdd']);
        Route::match(['get', 'post', 'delete'], '/edit/{pricing}', ['uses'=>'PricingEditController@execute', 'as'=>'pricingEdit']);
    });

    Route::group(['prefix'=>'showcase'], function(){
        Route::get('/', ['uses'=>'ShowcaseContoller@execute', 'as'=>'showcase']);
        Route::match(['get', 'post'], '/add', ['uses'=>'ShowcaseAddContoller@execute', 'as'=>'showcaseAdd']);
        Route::match(['get', 'post', 'delete'], '/edit/{showcase}', ['uses'=>'ShowcaseEditController@execute', 'as'=>'showcaseEdit']);
    });

    Route::group(['prefix'=>'team'], function(){
        Route::get('/', ['uses'=>'TeamContoller@execute', 'as'=>'team']);
        Route::match(['get', 'post'], '/add', ['uses'=>'TeamAddContoller@execute', 'as'=>'teamAdd']);
        Route::match(['get', 'post', 'delete'], '/edit/{showcase}', ['uses'=>'TeamEditController@execute', 'as'=>'teamEdit']);
    });

    Route::group(['prefix'=>'banner_2'], function(){
        Route::get('/', ['uses'=>'Banner_2Contoller@execute', 'as'=>'banner_2']);
        Route::match(['get', 'post'], '/add', ['uses'=>'Banner_2AddContoller@execute', 'as'=>'banner_2Add']);
        Route::match(['get', 'post', 'delete'], '/edit/{banner_2}', ['uses'=>'Banner_2EditController@execute', 'as'=>'banner_2Edit']);
    });

    Route::group(['prefix'=>'blog'], function(){
        Route::get('/', ['uses'=>'BlogContoller@execute', 'as'=>'blog']);
        Route::match(['get', 'post'], '/add', ['uses'=>'BlogAddContoller@execute', 'as'=>'blogAdd']);
        Route::match(['get', 'post', 'delete'], '/edit/{blog}', ['uses'=>'BlogEditController@execute', 'as'=>'blogEdit']);
    });
});
