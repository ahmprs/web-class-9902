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

    function insertNew(Request $req)
    {
        $book_title = $req->input("book_title");
        $book_author = $req->input("book_author");
        $book_isbn = $req->input("book_isbn");
        $book_info = $req->input("book_info");
        $book_qty = $req->input("book_qty");

        if ($book_title == null) return Response()->json(["err" => "missing book_title"]);
        if ($book_author == null) return Response()->json(["err" => "missing book_author"]);
        if ($book_isbn == null) return Response()->json(["err" => "missing book_isbn"]);
        if ($book_info == null) return Response()->json(["err" => "missing book_info"]);
        if ($book_qty == null) return Response()->json(["err" => "missing book_qty"]);

        $id = tbl_books::insertGetId([
            "book_id" => null,
            "book_title" => $book_title,
            "book_author" => $book_author,
            "book_isbn" => $book_isbn,
            "book_info" => $book_info,
            "book_qty" => $book_qty
        ]);

        if ($id > 0) return Response()->json(["ok" => 1, 'book_id' => $id]);
        else return Response()->json(["ok" => 0, 'err' => 'Unable to insert new record']);
    }

    function getAvailableBooks(Request $req)
    {
        $qty = $req->input('qty');
        if ($qty == null) $qty = 0;

        $records = tbl_books::where('book_qty', '>', $qty)->get();
        return Response()->json(['res' => $records]);
    }


    function deleteAll()
    {
        $cnt = tbl_books::where('book_id', '>', '5')->delete();
        return Response()->json(['res' => $cnt]);
    }


    function updateBookTitle(Request $req)
    {
        $book_title_old = $req->input('book_title_old');
        $book_title_new = $req->input('book_title_new');

        if ($book_title_old == null) return Response()->json(['err' => 'missing book_title_old']);
        if ($book_title_new == null) return Response()->json(['err' => 'missing book_title_new']);

        $cnt = tbl_books::where('book_title', '=', $book_title_old)->update(['book_title' => $book_title_new]);
        return Response()->json(['res' => $cnt]);
    }
}
