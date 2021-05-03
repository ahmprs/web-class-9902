<?php

namespace App\Http\Controllers;

use App\tbl_students;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TblStudentsController extends Controller
{
    function getAllStudents()
    {
        // $students = tbl_students::all();
        $students = tbl_students::where('std_id', '<', 20)->get();
        return Response()->json(["res" => $students]);
    }

    function deleteStudents(Request $req)
    {
        $std_id = $req->input('std_id');
        if ($std_id == null) return Response()->json(['err' => 'missing std_id']);

        $cnt = tbl_students::where('std_id', '=', $std_id)->delete();
        return Response()->json(["res" => $cnt]);
    }


    function updateStdName(Request $req)
    {
        $std_id = $req->input('std_id');
        $std_name = $req->input('std_name');

        if ($std_id == null) return Response()->json(['err' => 'missing std_id']);
        if ($std_name == null) return Response()->json(['err' => 'missing std_name']);


        $cnt = tbl_students::where('std_id', '=', $std_id)->update(['std_name'=>$std_name]);
        return Response()->json(["res" => $cnt]);
    }

    // function deleteAll(Request $req)
    // {
    //     $std_id = $req->input('std_id');
    //     if ($std_id == null) return Response()->json(['err' => 'missing std_id']);
    //     $cnt = tbl_students::all()->delete();
    //     return Response()->json(["res" => $cnt]);
    // }


}
