<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kadai02_1Controller extends Controller
{
        public function index()
        {
            $message='<b>コントローラーからビューへ渡された値。</b>';
            return view('kadai02_1',['message' => $message]);
        }
}
