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
<link href="../../Public/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="../../Public/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="../../Public/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="../../Public/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>后台登录 - H-ui.admin v3.1</title>

<style>
  .verify{
    margin-left: 30px;
    width: 100px;
    height: 40px;
  }
</style>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <form class="form form-horizontal" action="http://localhost:8081/hongsanzu/thinkphp-3.2/admin/login/checkus" method="post">
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-xs-8">
          <input id="" name="us" type="text" placeholder="账户" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-xs-8">
          <input id="" name="ps" type="password" placeholder="密码" class="input-text size-L">
        </div>
      </div>
     <!--  <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input name="verify" class="input-text size-L" type="text" placeholder="验证码" onblur="checkver(this)" onclick="if(this.value=='验证码:'){this.value='';}" value="验证码:" style="width:150px;">
          <img class="verify" src="http://localhost:8081/hongsanzu/thinkphp-3.2/admin/login/createVerify" alt="loading"> -->
          <!-- 这样会刷新整个界面 -->
          <!-- <img src=""> <a id="kanbuq" href="http://localhost/php/0901/thinkphp-3.2/admin/login/login">看不清，换一张</a> </div> -->
      <!--     <img src=""> <span id="kanbuq" ><a href="javascript:void(0);">看不清，换一张</a></span> </div>
      </div> -->
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <label for="online">
            <input type="checkbox" name="online" id="online" value="">
            使我保持登录状态</label>
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input name="" type="submit"  class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
          <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">Copyright wentworth</div>
<script type="text/javascript" src="../../Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="../../Public/static/h-ui/js/H-ui.min.js"></script>
<!--此乃百度统计代码，请自行删除-->
<script>
  // var state=false;
  // var url="http://localhost:8081/hongsanzu/thinkphp-3.2/admin/login/check_verifyWeb";
  // $(function(){
  //   $('#kanbuq').click(function(){
  //     // $('.verify')[0].src="http://localhost/php/0901/thinkphp-3.2/admin/login/createVerify";
  //     $('.verify').attr("src","http://localhost:8081/hongsanzu/thinkphp-3.2/admin/login/createVerify");
  //   })
  // });
  //  function checkver(obj){
  //     var data={verify:obj.value};
  //     $.post(url,data,function(response){
  //       if (response.state==1) {
  //           state=true;
  //       }
  //     },"json");
  //   }
  //   function check(){
  //     return state;
  //   }
</script>
<script>
// var _hmt = _hmt || [];
// (function() {
//   var hm = document.createElement("script");
//   hm.src = "https://hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
//   var s = document.getElementsByTagName("script")[0]; 
//   s.parentNode.insertBefore(hm, s);
// })();
</script>
<!--/此乃百度统计代码，请自行删除
</body>
</html>