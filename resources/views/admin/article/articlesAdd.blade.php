<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>文章添加--layui后台管理模板</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="{{asset('/assets/admin/layui/css/layui.css')}}" media="all" />
</head>
<body class="childrenBody">
	 @include('admin.shared._message')
	 @include('admin.shared._error')
	<form class="layui-form" action="{{route('article.store')}}"  method="POST">
		 {{ csrf_field() }}
		<div class="layui-form-item">
			<label class="layui-form-label">文章标题</label>
			<div class="layui-input-block">
				<input type="text" class="layui-input newsName" name="article_title" lay-verify="required" placeholder="请输入文章标题">
			</div>
		</div>
		<div class="layui-form-item">
			<!-- <div class="layui-inline">
				<label class="layui-form-label">自定义属性</label>
				<div class="layui-input-block">
					<input type="checkbox" name="tuijian" class="tuijian" title="推荐">
					<input type="checkbox" name="shenhe" class="newsStatus" title="审核">
					<input type="checkbox" name="show" class="isShow" title="展示">
				</div>
			</div> -->
			<div class="layui-inline">
				<label class="layui-form-label">文章作者</label>
				<div class="layui-input-inline">
					<input type="text" class="layui-input newsAuthor" name="author" lay-verify="required" placeholder="请输入文章作者">
				</div>
			</div>

			<div class="layui-inline">
				<label class="layui-form-label">分类</label>
				<div class="layui-input-inline">
					<select name="sort_article_id" class="newsLook" lay-filter="browseLook">
							@foreach ($categories as $cat)
								<option value="{{$cat->id}}">{{$cat->cname}}</option>
							@endforeach
						</select>
				</div>
			</div>


			<div class="layui-inline">
				<label class="layui-form-label">标签</label>
				<div class="layui-input-inline">
					<select name="tag_id" class="newsLook" lay-filter="browseLook">
							@foreach ($tags as $tag)
								<option value="{{$tag->id}}">{{$tag->tagname}}</option>
							@endforeach
						</select>
				</div>
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">关键字</label>
			<div class="layui-input-block">
				<input type="text" name="seokeywords" class="layui-input" placeholder="请输入文章关键字">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">内容摘要</label>
			<div class="layui-input-block">
				<textarea placeholder="请输入内容摘要"  name="article_desc" class="layui-textarea"></textarea>
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">文章内容</label>
			<div class="layui-input-block">
				<textarea class="layui-textarea layui-hide" name="article_content" lay-verify="content" id="news_content"></textarea>
			</div>
		</div>

		<div class="layui-form-item">
			<div class="layui-input-block">
				<button class="layui-btn" lay-submit="" lay-filter="addNews">立即提交</button>
				<button type="reset" class="layui-btn layui-btn-primary">重置</button>
		    </div>
		</div>
	</form>
	<script type="text/javascript" src="{{asset('/assets/admin/layui/layui.js')}}"></script>
	<script type="text/javascript" src="{{asset('/assets/admin/js/articlesAdd.js')}}"></script>
</body>
</html>
