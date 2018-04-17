<?php if (!defined('THINK_PATH')) exit();?><!--  -->
<style>
	img{
		width: 200px;
		height: 100px;
	}
</style>
<body>
<article class="page-container">
	
		<form class="form form-horizontal" id="form-admin-add" action="addMovie" method="post" enctype="multipart/form-data">
			<div class="row cl">
				<input class="input-text" value="" placeholder="" id="num" name="num" type="hidden">
				<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户名称：</label>
				<div class="formControls col-xs-8 col-sm-9">
					<input type="text" class="input-text" value="" placeholder="" id="name" name="name">
				</div>
			</div>
			
			<div class="row cl">
				<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>更新头像：</label>
				<div class="formControls col-xs-8 col-sm-9">
					<input type="hidden" name="MAX_FILE_SIZE" value="200000">
					<input type="file" name="file"/>
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>图片位置：</label>
				<div class="formControls col-xs-8 col-sm-9">
					<input type="text" class="input-text" autocomplete="off" value=""  placeholder="" id="palcetype" name="palcetype">
				</div>
				</div>
				<div class="row cl">
				<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>问题类型：</label>
				<div class="formControls col-xs-8 col-sm-9">
					<input type="text" class="input-text" autocomplete="off" value=""  placeholder="" id="type" name="type">
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>问题内容：</label>
				<div class="formControls col-xs-8 col-sm-9">
					<input type="text" class="input-text" autocomplete="off" value=""  placeholder="" id="introduce" name="introduce">
				</div>
			</div>
				<div class="row cl">
				<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>添加时间：</label>
				<div class="formControls col-xs-8 col-sm-9">
					<input type="text" class="input-text" autocomplete="off" value=""  placeholder="" id="date" name="date">
				</div>
			</div>
			<div class="row cl">
				<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
					<input name="sub" type="submit" class="btn btn-success radius size-L" value="&nbsp;提&nbsp;&nbsp;&nbsp;&nbsp;交&nbsp;">
				</div>
			</div>
		</form>
	
</article>

<!--_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="../../Public/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="../../Public/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="../../Public/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>