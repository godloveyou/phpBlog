<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('admin.article.articlesList');
    }

    public function create()
    {
      return view('admin.article.articlesAdd');
    }
}
