<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
      # 权限检验
      return view('admin.index');
    }

    public function weclome()
    {
      return view('admin.page.main');
    }
}
