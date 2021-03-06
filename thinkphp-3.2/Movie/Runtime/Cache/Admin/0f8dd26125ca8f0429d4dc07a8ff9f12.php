<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/thinkphp-3.2/Public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/thinkphp-3.2/Public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/thinkphp-3.2/Public/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/thinkphp-3.2/Public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/thinkphp-3.2/Public/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>修改评论</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
<?php if(is_array($wordInfo)): $i = 0; $__LIST__ = $wordInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><form class="form form-horizontal" id="form-admin-add">
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户名</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" style="display: none;" value="<?php echo ($item["word_id"]); ?>" placeholder="" id="id" name="id">
			<p style="border: none;" class="input-text" id="userName"><?php echo ($item["user_name"]); ?></p>  
			<!-- <input type="text" class="input-text" value="<?php echo ($item["user_name"]); ?>" placeholder="" id="userName" name="userName"> -->
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>电影名</label>
		<div class="formControls col-xs-8 col-sm-9">
			<!-- <input type="text" class="input-text" autocomplete="off" value="<?php echo ($item["movie_name"]); ?>" placeholder="" id="movieName" name="movieName"> -->
			<p style="border: none;" class="input-text" id="userName"><?php echo ($item["movie_name"]); ?></p>  
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>日期</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($item["word_date"]); ?>" placeholder="" id="date" name="date">
		</div>
	</div>
	<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>评论</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($item["message"]); ?>" placeholder="" id="msg" name="msg">
			</div>
	</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input class="btn btn-primary radius" type="button" id="sub" value="&nbsp;&nbsp;修改&nbsp;&nbsp;">
		</div>
	</div>
	</form><?php endforeach; endif; else: echo "" ;endif; ?>
</article>

<!--_footer 作为公共模版分离出去--> 
<script type="text/javascript" src="/thinkphp-3.2/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/thinkphp-3.2/Public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/thinkphp-3.2/Public/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/thinkphp-3.2/Public/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/thinkphp-3.2/Public/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/thinkphp-3.2/Public/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/thinkphp-3.2/Public/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">
$(function(){
	$("#sub").click(function(){
		var userName=$("#userName").val();
		var movieName=$("#movieName").val();
		var date=$('#date').val();
		var msg=$('#msg').val();
		var id=$("#id").val();
		
		$.ajax({  
             type: "POST",  
             url: "http://localhost/thinkphp-3.2/admin/word/updateWord",  
             data: {id:id,userName:userName,movieName:movieName,date:date,msg:msg},  
             dataType: "json",  
             success: function(data){  
                var index = parent.layer.getFrameIndex(window.name);
				parent.$('.btn-refresh').click();
				parent.layer.close(index);
            }
        }); 
	})
});
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>