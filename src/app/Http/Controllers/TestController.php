<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /// public function index($text = "デフォルト") ※パスパラメータを受け取る
    /// public function index($text = "デフォルト") ※任意パラメータを受け取る
    /// public function index(Request $request) ※クエリパラメータを受け取る
    public function index() /// index.blade.phpを呼び出す
    {
        $item = [
            'content' => 'bladeファイル本文',
            /// 'param' => $text ※ビューに渡す連想配列にパスパラメータを含める
            /// 'param' => $request -> text ※$requestにパラメータが入っているため、「->」で取り出す。textがクエリパラメータで渡される値。
        ];
        return view('index', $item);
    }
}
