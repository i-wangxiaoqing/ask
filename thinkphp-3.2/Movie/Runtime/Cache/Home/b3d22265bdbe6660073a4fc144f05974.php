<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>云抢答系统-控制面板</title>
		<link rel="stylesheet" href="/tp/public/css/index.css">
		<link rel="stylesheet" href="https://cdn.bootcss.com/pure/1.0.0/pure-min.css">
		<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body>
		<h1>云抢答系统</h1>
		<div id="showResult" class="palette palette-river">请创建新抢答</div>
		<div class="pure-form">
			<center>
			<h3>新建抢答</h3>
			<fieldset>
				等待时间(秒)<input type="text" id="Delay" value="3" />
				<br />
				进行时间(秒)<input type="text" id="TimeOut" value="60" />
				<br />
				<button id="but0">开始</button>
			</fieldset>
			</center>
		</div>
		<br>
		<a href="https://github.com/cyyself/vie-to-answer">vie-to-answer</a>
		<br>
		Made with ❤️ by <a href="https://cyyself.name">cyy</a>
		<script src="/tp/public/js/func-board.js"></script>
	</body>
</html>