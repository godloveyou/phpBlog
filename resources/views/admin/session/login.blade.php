<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>后台管理</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="{{asset('/assets/admin/layui/css/layui.css')}}" media="all" />
	<link rel="stylesheet" href="{{asset('/assets/admin/css/login.css')}}" media="all" />
	<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
	<video class="video-player" preload="auto" autoplay="autoplay" loop="loop" data-height="1080" data-width="1920" height="1080" width="1920">
	    <source src="{{asset('/assets/admin/login.mp4')}}" type="video/mp4">
	</video>

	<div class="video_mask"></div>

	<div class="login">
	    <h1>博客登录</h1>
			@include('admin.shared._message')
			@include('admin.shared._error')
	    <form class="layui-form" method="post" action="">
			{{ csrf_field() }}
	    	<div class="layui-form-item">
				<input class="layui-input" name="email" placeholder="邮箱" value="823939100@qq.com" lay-verify="required" type="text" autocomplete="off">
		    </div>
		    <div class="layui-form-item">
				<input class="layui-input" name="password" placeholder="密码" value="123456" lay-verify="required" type="password" autocomplete="off">
		    </div>
		    <div class="layui-form-item form_code">
				<input class="layui-input" name="vcode" placeholder="验证码" lay-verify="required" type="text" autocomplete="off">
				<div class="code"><img src="{{url('admin/code')}}" onclick="this.src='{{url('admin/code')}}'+'?'+Math.random()"   width="116" height="36"></div>
		    </div>
			<button class="layui-btn login_btn" lay-submit="" lay-filter="login">登录</button>
		</form>
	</div>
	<script type="text/javascript" src="{{asset('/admin/layui/layui.js')}}"></script>
	<script type="text/javascript" src="{{asset('/admin/js/login.js')}}"></script>
</body>
</html>
