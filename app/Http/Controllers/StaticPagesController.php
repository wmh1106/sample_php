<?php

// namespace 代表的是 命名空间，
// 简单来说，开发者可以利用命名空间来区分归类不同的代码功能，
// 避免引起变量名或函数名的冲突。
// 你可以把命名空间理解为文件路径，把变量名理解为文件。
// 当我们在不同路径分别存放了相同的文件时，系统就不会出现冲突。

namespace App\Http\Controllers;

// 用 use 来引用在 PHP 文件中要使用的类，引用之后便可以对其进行调用。
use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('static_pages/home');
    }

    public function help()
    {
        return view('static_pages/help');
    }
    public function about()
    {
        return view('static_pages/about');
    }
}
