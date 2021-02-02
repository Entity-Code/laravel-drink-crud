<?php
//name
//gradation
//price
use Illuminate\Support\Facades\Route;

//index
Route::get('/', 'DrinkController@index')
    -> name('drinks-index');

//show
Route::get('/show/{id}', 'DrinkController@show')
    -> name('drink-show');

//create
Route::get('/create', 'DrinkController@create')
    -> name('drink-create');
Route::post('/store', 'DrinkController@store')
    -> name('drink-store');


//edit
Route::get('/edit/{id}', 'DrinkController@edit')
    -> name('drink-edit');
Route::post('/update/{id}', 'DrinkController@update')
    -> name('drink-update');

//delete
Route::get('/delete/{id}', 'DrinkController@delete')
    -> name('drink-delete');