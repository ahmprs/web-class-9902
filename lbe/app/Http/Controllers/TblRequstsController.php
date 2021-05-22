<?php

namespace App\Http\Controllers;

use App\tbl_requsts;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TblRequstsController extends Controller
{
    function getAllRequests()
    {
        // $res = tbl_requsts::where('req_id','=',10)->get();
        $res = tbl_requsts::all();
        return Response()->json([
            "res" => $res
        ]);
    }

    function insertNewRequest(Request $req)
    {
        $req_title = $req->input('req_title');
        if ($req_title == null) {
            return Response()->json([
                "err" => "missing req_title"
            ]);
        }

        $priority = $req->input('priority');
        if ($priority == null) {
            return Response()->json([
                "err" => "missing priority"
            ]);
        }

        $description = $req->input('description');
        if ($description == null) {
            return Response()->json([
                "err" => "missing description"
            ]);
        }

        $id = tbl_requsts::insertGetId([
            "req_id" => null,
            "req_title" => $req_title,
            "priority" => $priority,
            "description" => $description,
        ]);

        return Response()->json([
            "rec_id" => $id
        ]);
    }

    function deleteRecords()
    {
        $cnt = tbl_requsts::where('req_id', '>', '10')->delete();
        return Response()->json([
            "cnt" => $cnt
        ]);
    }
}
