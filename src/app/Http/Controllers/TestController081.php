<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $requestroom, $requestid)
    {
            $item = [
                'content' => 'パラメータを渡す',
                'param-room' => $requestroom->room,
                'param-id' => $requestid->id,
                'txt' => 'テキスト'
            ];
            return view('index', $item);
        }
}