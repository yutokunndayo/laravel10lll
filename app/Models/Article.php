<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;

    // ▼▼ ここから追加 ▼▼
    // ルール用のプロパティ
    public static $rules = [
        "title" => ["required"],
        "body"  => ["required"],
    ];

    // メッセージ用のプロパティ
    public static $messages = [
        "title.required" => "タイトルが入力されていません",
        "body.required"  => "本文が入力されていません",
    ];
    // ▲▲ ここまで追加 ▲▲
}
