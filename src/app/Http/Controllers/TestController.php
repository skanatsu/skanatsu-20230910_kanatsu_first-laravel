<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // public function index(Request $request)
    // {
    //         $item = [
    //             'content' => 'パラメータを渡す',
    //             'param' => $request->text,
    //             'txt' => 'テキスト'
    //         ];
    //         return view('index', $item);
    //     }
    public function index(){
        $item = [
            'content' => '本文'
        ];
        return view('index', $item);
    }
}