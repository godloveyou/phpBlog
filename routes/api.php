<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
当我们需要定义api routes的时候，我们可能不想要csrf保护。比如微信公众号接口，当微信服务器使用POST推送给我们消息时，
如果开启了csrf保护，那么请求肯定是失败的。
|在访问的时候，我们需要在route前，加上api/前缀：
http://my-web-site/api/admin/article/list
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/admin/article/list','Admin\ArticlesController@list');
