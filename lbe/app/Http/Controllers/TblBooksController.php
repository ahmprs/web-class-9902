<?php

namespace App\Http\Controllers;

use App\tbl_books;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TblBooksController extends Controller
{
    function getAllRecords(Response $resp)
    {
        $records = tbl_books::all();
        return Response()->json(['res' => $records]);
    }
}
