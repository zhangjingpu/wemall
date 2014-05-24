<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>wemall微信商城PHP商城系统---by oitone.net</title>
<meta name="keywords" content="WeMall,微信商城,微信,微信助手,微信营销,微信第三方接口,微信公众账号">
<meta name="description" content="WeMall提供最好用、最方便的微信接口，微信会员卡、优惠券、大转盘、团购、一战到底、微网站、微相册、在线预订，一应俱全。让你运营微信得心应手!">
<meta name="robots" content="all"/>
<meta name="author" content="oitone.net"/>
<meta http-equiv="content-language" content="zh-cn"/>
<link rel="stylesheet" href="/WeMall/Home/Home/Common/css/jquery.fullPage.css">
<style>
#side { position: fixed; left: 0; top: 0; z-index: 10; width: 300px; height: 100%; background-image: url(/WeMall/Home/Home/Common/images/df-side.png);}
.inner { position: absolute; left: 50%; top: 50%; width: 226px; margin: -112px 0 0 -113px;}
.hgroup { width: 226px; height: 81px; margin: 0 auto; text-indent: -9999px; background-image: url(/WeMall/Home/Home/Common/images/df-logo.png);}
.start { display: block; width: 186px; height: 56px; margin: 66px auto 0; text-indent: -9999px; overflow: hidden; background-image: url(/WeMall/Home/Home/Common/images/df-start.png);}
.doc { display: block; width: 186px; height: 56px; margin: 66px auto 0; text-indent: -9999px; overflow: hidden; background-image: url(/WeMall/Home/Home/Common/images/doc.png);}
#menu { position: absolute; right: -20px; top: 50%; width: 40px; margin-top: -170px; padding: 0; list-style-type: none;}
#menu li { float: left;}
#menu a { display: block; width: 28px; height: 28px; margin: 20px 6px; border-radius: 14px; text-indent: -9999px; overflow: hidden; background-color: #a0afb9; background-position: 50%; background-repeat: no-repeat;}
#menu .a1 { background-image: url(/WeMall/Home/Home/Common/images/df-01.png);}
#menu .a2 { background-image: url(/WeMall/Home/Home/Common/images/df-02.png);}
#menu .a3 { background-image: url(/WeMall/Home/Home/Common/images/df-03.png);}
#menu .a4 { background-image: url(/WeMall/Home/Home/Common/images/df-04.png);}
#menu .a5 { background-image: url(/WeMall/Home/Home/Common/images/df-05.png);}
#menu a:hover, #menu .active a { margin: 14px 0; border: 6px solid #fff; box-shadow: 1px 1px 3px 1px #b4d7ed; border-radius: 20px; background-color: #239ae6;}
.section { margin-left: 300px; text-align: center; font: 50px "Microsoft Yahei"; color: #fff;}
.section .imgbox { margin-left: 300px;}
.section img { position: relative; left: -300px; display: block; margin: 0 auto;}
</style>
<script src="/WeMall/Home/Home/Common/js/jquery-1.8.3.min.js"></script>
<script src="/WeMall/Home/Home/Common/js/jquery-ui-1.10.3.min.js"></script>
<script src="/WeMall/Home/Home/Common/js/jquery.fullPage.js"></script>
<script>
$(document).ready(function() {
	$.fn.fullpage({
		slidesColor: ['#fff', '#fff', '#fff', '#fff', '#fff'],
		anchors: ['page1', 'page2', 'page3', 'page4', 'page5'],
		menu: '#menu'
	});
});
</script>
</head>

<body>

<div id="side">
		<div class="inner">
		<div class="hgroup">
			<h1><a href="http://sc.admin5.com/">微信商城wemall</a></h1>
			<h2>专业的微信商城系统</h2>
		</div>
		<a class="start" href="/WeMall/admin.php/Home/Index/index">登陆/注册</a>
		<span style="padding-left:18px;"><font color="#FFF"><b>注册请联系QQ:786699892</b></font></span>
		<span style="padding-left:6px;"><font color="#FFF"><b>体验请搜索微信号：iwemall</b></font></span>
		<a class="doc" href="#">文档</a>
	</div>
	<ul id="menu">
		<li class="active" data-menuanchor="page1"><a class="a1" href="#page1" title="快速创建微信商城">快速创建微信商城</a></li>
		<li data-menuanchor="page2"><a class="a2" href="#page2" title="丰富的界面">丰富的界面</a></li>
		<li data-menuanchor="page3"><a class="a3" href="#page3" title="功能强大的系统">功能强大的系统</a></li>
		<li data-menuanchor="page4"><a class="a4" href="#page4" title="多种屏幕预览">多种屏幕预览</a></li>
		<li data-menuanchor="page5"><a class="a5" href="#page5" title="全网高速访问">全网高速访问</a></li>
	</ul>
</div>

<div class="section">
	<div class="imgbox">
		<img src="/WeMall/Home/Home/Common/images/1.jpg" alt="快速创建微信商城">
	</div>
</div>
<div class="section">
	<div class="imgbox">
		<img src="/WeMall/Home/Home/Common/images/2.jpg" alt="丰富的界面">
	</div>
</div>
<div class="section">
	<div class="imgbox">
		<img src="/WeMall/Home/Home/Common/images/3.jpg" alt="功能强大的系统">
	</div>
</div>
<div class="section">
	<div class="imgbox">
		<img src="/WeMall/Home/Home/Common/images/4.jpg" alt="多种屏幕预览">
	</div>
</div>
<div class="section">
	<div class="imgbox">
		<img src="/WeMall/Home/Home/Common/images/5.jpg" alt="全网高速访问">
	</div>
</div>
<div style="text-align:center;clear:both">
</div>
</body>
</html>