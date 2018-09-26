<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


// get 表明这个路由将会响应 GET 请求，并将请求映射到指定的控制器动作上。
// 比方说，我们向 http://sample.test/ 发出了一个请求，
// 则该请求将会由 StaticPagesController 的 home 方法进行处理
Route::get('/', 'StaticPagesController@home');
Route::get('/help', 'StaticPagesController@help');
Route::get('/about', 'StaticPagesController@about');
