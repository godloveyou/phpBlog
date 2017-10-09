<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('articles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('article_id');
            $table->string('article_title')->nullable();
            $table->string('article_desc')->nullable();
            $table->string('article_content');
            $table->integer('article_click')->default(0);
            $table->string('user_id');
            $table->string('sort_article_id'); //分类
            $table->string('article_up'); //是否置顶
            $table->string('author');
            $table->string('seokeywords');
            $table->string('tag_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('articles');
    }
}
