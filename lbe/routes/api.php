<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::any('test', function (Request $request) {
    return 'test endpoint here.';
});


Route::any('get-all-books', "TblBooksController@getAllRecords");
Route::any('get-available-books', "TblBooksController@getAvailableBooks");
Route::any('insert-new-book', "TblBooksController@insertNew");
Route::any('delete-all-books', "TblBooksController@deleteAll");
Route::any('update-book-title', "TblBooksController@updateBookTitle");
