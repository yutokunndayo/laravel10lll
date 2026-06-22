<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

use DB;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $articles=Article::all();
         return $articles;
        //  $articles=Article::paginate(10);
        // return view('articleList',compact('articles'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('articleRegistration');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
    {
        //
        $request->session()->regenerateToken();

        //Articlモデルの新規オブジェクト作成
        $article = new Article();


        $request->validate($article::$rules, $article::$messages);


        $article->title = $request->title;
        $article->body = $request->body;

DB::transaction(function () use ($article) {
            $article->save();
        });
        //記事一覧に戻る
        return redirect('/articles');

    }


    /**
     * Display the specified resource.
     */
    //




    public function show(string $id)
    {
        $article_data = Article::find($id);

    return view("articleDetail", compact("article_data"));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article=Article::find($id);
        return view('articleEditing',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->session()->regenerateToken();

        //Articlモデルの1件検索
        $article = Article::find($id);

        $request->validate($article::$rules, $article::$messages);


        $article->title = $request->title;
        $article->body = $request->body;
DB::transaction(function () use ($article) {
        $article->save();
});
        //記事一覧に戻る
        return redirect('/articles/'.$id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         DB::transaction(function () use ($id) {
        // destroyメソッドにてidを指定して削除
        Article::destroy($id);
    });

// 一覧画面にリダイレクト
    return redirect("/articles");

    }
}
