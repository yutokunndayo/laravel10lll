<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Resources\ArticlesResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArticlesAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 1. Articlesテーブルから全件取得
        $articles = Article::all();

        // 講義資料にあるような、自作のJsonConvertクラスをインスタンス化
        // (※JsonConvertの配置場所に合わせて正しくインポート、またはnewしてください)
        $convert = new JsonConvert();

        // 2. データ取得成功時（データが1件以上ある場合）
        if ($articles->isNotEmpty()) {
            // 複数データ（コレクション）にAPIリソースを適用
            $data = ArticlesResource::collection($articles);
            $status = Response::HTTP_OK; // 200
        } else {
            // 3. 失敗時（データが0件の場合）
            $data = []; // または課題指定の空データ
            $status = Response::HTTP_NOT_FOUND; // 404
        }

        return $convert->toJson($data, $status);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 1. idをキーに1件検索
        $article = Article::find($id);
        $convert = new JsonConvert();

        // 2. データ取得成功時（データが存在する場合）
        if ($article) {
            // 1件のデータにAPIリソースを適用
            $data = new ArticlesResource($article);
            $status = Response::HTTP_OK; // 200
        } else {
            // 3. 失敗時（データが存在しない場合）
            $data = ['message' => 'データがありません']; // 課題の仕様書にある失敗時JSONデータに合わせてください
            $status = Response::HTTP_NOT_FOUND; // 404
        }

        return $convert->toJson($data, $status);
    }
}
