<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::transaction(function () {
        // Article::insert([
        //     [
        //         'title' => 'Global Education Awards',
        //         'body'  => '本文１'
        //     ],
        //     [
        //         'title' => '地球祭が今年も開催！！',
        //         'body'  => '本文２'
        //     ],
        //     [
        //         'title' => ' 「ハロウィンDay」でした。',
        //         'body'  => '本文３'
        //     ],
        // ])

        // ;
         // モデルファクトリーを利用したテストデータの挿入（100件分）
        Article::factory()->count(100)->create();
   });


    }
}

