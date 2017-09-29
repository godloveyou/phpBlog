<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class IndexController extends Controller
{
    public function __construct(){
       $this->middleware('auth',[]);
    }

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
