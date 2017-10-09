<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'articles';
    protected $fillable = ['article_up','user_id','article_title','article_desc','article_content','sort_article_id','author','seokeywords','tag_id'];
}
