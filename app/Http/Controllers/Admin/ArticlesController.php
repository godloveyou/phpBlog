<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('admin.article.articlesList');
    }

    public function create()
    {
      $tags = DB::table('tags')->get();
      $categories = DB::table('categories')->get();
      return view('admin.article.articlesAdd',compact('tags','categories'));
    }

    public function store(Request $request){
      $this->validate($request, [
        'article_title' => 'required|max:255',
        'article_content' => 'required',
        'article_desc' => 'required',
        'author' => 'required',
        'seokeywords' => 'required'
      ]);

      Article::create([
        'article_up'=>'0',
        'user_id' => '456105f4-fdff-3223-9add-9221e04362b5',
        'article_title' =>$request->article_title,
        'article_content' =>$request->article_content,
        'article_desc' =>$request->article_desc,
        'sort_article_id' =>$request->sort_article_id,
        'author' =>$request->author,
        'seokeywords' =>$request->seokeywords,
        'tag_id' =>$request->tag_id
      ]);

      session()->flash('success','发布成功');
      return redirect()->back();
    }
}
