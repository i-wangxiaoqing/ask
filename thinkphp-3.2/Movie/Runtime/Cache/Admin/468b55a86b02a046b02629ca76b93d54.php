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
<link rel="stylesheet" type="text/css" href="../../Public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="../../Public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="../../Public/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="../../Public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="../../Public/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>添加管理员 - 管理员管理 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<?php if(is_array($userInfo)): $i = 0; $__LIST__ = $userInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><form class="form form-horizontal" id="form-admin-add">
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>会员：</label>
		<div class="formControls col-xs-8 col-sm-9">
		<input type="text" style="display: none;" value="<?php echo ($item["user_id"]); ?>" placeholder="" id="adminId" name="adminId">
			<input type="text" class="input-text" value="<?php echo ($item["user_name"]); ?>" placeholder="" id="adminName" name="adminName">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>初始密码：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="password" class="input-text" autocomplete="off" value="<?php echo ($item["user_pass"]); ?>" placeholder="密码" id="userpassword" name="password">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>确认密码：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="password" class="input-text" autocomplete="off"  placeholder="确认新密码" id="password2" name="password2">
		</div>
	</div>
	
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($item["user_phone"]); ?>" placeholder="" id="userphone" name="phone">
		</div>
	</div>
	
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input id="sub" class="btn btn-primary radius" type="button" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
		</div>
	</div>
	</form><?php endforeach; endif; else: echo "" ;endif; ?>
</article>

<!--_footer 作为公共模版分离出去--> 
<script type="text/javascript" src="../../Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="../../Public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="../../Public/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="../../Public/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="../../Public/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="../../Public/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="../../Public/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">
$(function(){
	// console.log($("#adminId").val());
	$("#sub").click(function(){
		var adminName=$("#adminName").val();
		var adminId=$("#adminId").val();
		var adminPass=$("#userpassword").val();

		var adminPhone=$("#userphone").val();
		 // alert(adminP);
		$.ajax({
			type: 'POST',
			url: 'http://localhost:8081/hongsanzu/ask/thinkphp-3.2/admin/user/updateUser',
			data: {adminId:adminId,adminName:adminName,adminPass:adminPass,adminPhone:adminPhone},
			dataType: 'json',
			success: function(res){
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