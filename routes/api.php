<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OrderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



//--------------------------- Oreder Api  route ------------------------------'
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/StoreOrders', [OrderController::class, 'store']);
});

Route::get('/ALlOrders', [OrderController::class, 'index']);
Route::get('/ShowOrder/id={id}', [OrderController::class, 'show']);
Route::get('/deleteorder/id={id}', [OrderController::class, 'destroy']);

//-------------------------------------------------------------------

//--------------------------- Product Api  route ------------------------------'
Route::get('/AllProducts', 'API\ProductController@index');
Route::post('/StoreProduct', 'API\ProductController@Store');
Route::get('/ShowProduct/id={id}', 'API\ProductController@show');
Route::put('/updateProduct/id={id}', 'API\ProductController@update');
Route::get('/deleteProduct/id={id}', 'API\ProductController@delete');

//-------------------------------------------------------------------

//--------------------------- Category Api  route ------------------------------'
Route::get('/AllCategories', 'API\CategoriesController@index');
Route::post('/StoreCategory', 'API\CategoriesController@Store');
Route::get('/ShowCategory/id={id}', 'API\CategoriesController@show');
Route::put('/updateCategory/id={id}', 'API\CategoriesController@update');
Route::delete('/deleteCategory/id={id}', 'API\CategoriesController@delete');
//--------------------------- Category Api  route ------------------------------

//--------------------------- Event Api  route ------------------------------'
Route::get('/AllEvents', 'API\EventController@index');
Route::post('/StoreEvent', 'API\EventController@Store');
Route::get('/ShowEvent/id={id}', 'API\EventController@show');
Route::put('/updateEvent/id={id}', 'API\EventController@update');
Route::get('/deleteEvent/id={id}', 'API\EventController@delete');
//--------------------------- Event Api  route ------------------------------

//--------------------------- Contact Api  route ------------------------------'
Route::get('/AllContacts', 'API\ContactController@index');
Route::post('/StoreContact', 'API\ContactController@Store');
Route::get('/ShowContact/id={id}', 'API\ContactController@show');
Route::put('/updateContact/id={id}', 'API\ContactController@update');
Route::get('/deleteContact/id={id}', 'API\ContactController@delete');
//--------------------------- Contact Api  route ------------------------------

//--------------------------- User Api  route ------------------------------'
Route::get('/AllUsers', 'API\UsersController@index');
Route::post('/StoreUser', 'API\UsersController@Store');
Route::get('/ShowUser/id={id}', 'API\UsersController@show');
Route::put('/updateUser/id={id}', 'API\UsersController@update');
Route::get('/deleteUser/id={id}', 'API\UsersController@delete');
//--------------------------- User Api  route ------------------------------
