<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/generate-fake-data/cities/{count?}', [
    'uses' => 'HBFakeDataController@generateCities'
]);
Route::get('/generate-fake-data/hobbies/{count?}', [
    'uses' => 'HBFakeDataController@generateHobbies'
]);
Route::get('/generate-fake-data/people/{count?}', [
    'uses' => 'HBFakeDataController@generatePeople'
]);
Route::get('/generate-fake-data/people-hobbies-connections/{count?}', [
    'uses' => 'HBFakeDataController@generateClientsPersonsTypesConnections'
]);


Route::get('/cities', ['uses' => 'HBCitiesController@index']);
Route::post('/cities', [ 'as' => 'app.cities', 'uses' => 'HBCitiesController@create']);