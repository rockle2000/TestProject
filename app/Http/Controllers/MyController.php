<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function index()
    {
        # code...
        $title = "Đây là tiêu đề";
        $desc = "Đây là mô tả";
        $name = "Huy";

        return view('test')->with(['title' => $title . '<br>', 'desc' => $desc . '<br>', 'name' => $name . '<br>']);
    }
}
