<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HelloController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [TestController::class, 'index']);

/// パスパラメータ
/// Route::get('/test/{text}', [TestController::class, 'index']);

///　任意パラメータ　※パラメータを付けなくても/testでアクセスできる！
/// Route::get('/test/{text?}', [TestController::class, 'index']);

///　クエリパラメータ　※例/test/?text=56789　などで「＝」以下の文字が出力される
/// Route::get('/test', [TestController::class, 'index']);

///　問題1　リクエストURLを「/test/{room}/{id}」として2つのパラメータを取得し、「roomが200でidは3です」と表示させてください。
Route::get('/test/{room}/{id}', function($room, $id){
    return 'roomが' . $room . 'でidは' . $id . 'です';
});

/// 問題2　リクエストURLを「/test」とした時に「Goodmorning=おはようございます」が表示され、リクエストURLを「/test/Bonjour」とした時に「Bonjour=おはようございます」が表示されるようにルーティングを設定してください。
Route::get('/test/{greeting?}', function($greeting = 'Goodmorning'){
    return $greeting . '=おはようございます';
});

Route::get('/hello', [HelloController::class, 'index']);
