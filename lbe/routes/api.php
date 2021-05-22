<?php

use App\tbl_requsts;
use Illuminate\Http\Client\Response;
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
    return Response()->json([
        "resp" => "this is my response"
    ]);
});


Route::any('get-all-books', "TblBooksController@getAllRecords");
Route::any('get-available-books', "TblBooksController@getAvailableBooks");
Route::any('insert-new-book', "TblBooksController@insertNew");
Route::any('delete-all-books', "TblBooksController@deleteAll");
Route::any('update-book-title', "TblBooksController@updateBookTitle");


Route::any('get-all-students', 'TblStudentsController@getAllStudents');
Route::any('delete-student', 'TblStudentsController@deleteStudents');
Route::any('update-student', 'TblStudentsController@updateStdName');


Route::any('calc-sum', function (Request $req) {
    $x = $req->input('x');
    if ($x == null) return Response()->json(['err' => 'missing x']);

    $y = $req->input('y');
    if ($y == null) return Response()->json(['err' => 'missing y']);

    $z = (int)$x + (int)$y;

    return Response()->json(['resp' => $z]);
});


Route::any('get-all-requests', 'TblRequstsController@getAllRequests');
Route::any('insert-new-request', 'TblRequstsController@insertNewRequest');
Route::any('delete_records', 'TblRequstsController@deleteRecords');
