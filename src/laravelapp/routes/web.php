<?php

Auth::routes();

// 初回アクセス時のみLaravel側でリクエストを受けてページを表示し、
// それ以降はフロント側のVue Routerによってルーティング
Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
