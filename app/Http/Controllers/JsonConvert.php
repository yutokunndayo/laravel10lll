<?php

namespace App\Http\Controllers;

class JsonConvert
{
    /**
     * データを一貫したJSON形式に変換してレスポンスを返すメソッド
     *
     * @param mixed $data 返却するデータ（モデル、リソース、配列など）
     * @param int $status HTTPステータスコード（200や404など）
     * @return \Illuminate\Http\JsonResponse
     */
    public function toJson($data, $status)
    {
        // 課題の仕様（statusとdataを持つJSON）に合わせて整形
        return response()->json([
            'status' => $status,
            'data' => $data
        ], $status);
    }
}
