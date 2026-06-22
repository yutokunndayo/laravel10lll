<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kadai02_3Controller extends Controller
{
        public function index()
        {
$message='';
$data = [
            [
                "id" => 1,
                "name" => "ユーザー　太郎",
                "comment" => "同窓会で懐かしい友人達に再会しました。"
            ],
            [
                "id" => 2,
                "name" => "ほげ　ほげ次郎",
                "comment" => "春休みには旅行に行きました！"
            ],
        ];

            return view('kadai02_3', compact('message', 'data'));
        }
}
