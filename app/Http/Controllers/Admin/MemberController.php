<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class MemberController extends Controller
{

    public function index()
    {
        dd('网站会员管理首页，当前登录用户名：'.auth('admin')->user()->name);
    }

    public function address()
    {
        dd('这是会员地址列表');
    }

}
