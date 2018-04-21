<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
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
<title>抢答排行列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 抢答排行管理 <span class="c-gray en">&gt;</span> 排行列表 <a class="btn-refresh btn btn-success radius r" style="line-height:1.6em;margin-top:3px" onclick="refresh()" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
	<form action="http://localhost:8081/hongsanzu/ask/thinkphp-3.2/admin/user/searchUser" method="post">
		<input type="text" class="input-text" style="width:250px" placeholder="输入会员名称" id="inputname" name="inputname">
		<button  class="btn btn-success" id="search" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
	</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="user_add('添加会员','http://localhost:8081/hongsanzu/ask/thinkphp-3.2/admin/user/UserAdd','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加问题</a></span> <span class="r">共有数据：<strong><?php echo ($adminCount); ?></strong> 条</span> </div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="9">问题列表</th>
			</tr>
			<tr class="text-c">
                                          <th width="25"><input type="checkbox" name="" value=""></th>
				<th width="40">ID</th>
				<th width="60">问题内容</th>
				<th width="60">问题类型</th>
				<th width="40">问题答案</th>
				<th width="60">A</th>
				<th width="60">B</th>
				<th width="60">C</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($userInfor)): $i = 0; $__LIST__ = $userInfor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr class="text-c">
				

					<td><input type="checkbox" value="<?php echo ($item["question_id"]); ?>" name=""  class="use"></td>
			                      <td><?php echo ($item["question_id"]); ?></td>
					 <td><?php echo ($item["question_title"]); ?></td>
					 <td><?php echo ($item["question_type"]); ?></td>
					<td><?php echo ($item["question_answer"]); ?></td>
					<td><?php echo ($item["A"]); ?></td>
					<td><?php echo ($item["B"]); ?></td>
                                                     <td><?php echo ($item["C"]); ?></td>
					
					
					<td class="td-manage"> <a title="编辑" href="javascript:;" onclick="user_edit('用户编辑','http://localhost:8081/hongsanzu/ask/thinkphp-3.2/admin/user/userEdit?edit_id=<?php echo ($item["user_id"]); ?>','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="user_del(this,<?php echo ($item["user_id"]); ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="../../Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="../../Public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="../../Public/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="../../Public/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="../../Public/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="../../Public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="../../Public/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/
/*管理员-增加*/
function user_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*管理员-删除*/
function user_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		// alert(id);
		$.ajax({
			type: 'POST',
			url: 'http://localhost:8081/hongsanzu/ask/thinkphp-3.2/admin/user/Userdel',
			data:{del_id:id},
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
				refresh();
			},
			error:function(data) {
				console.log(data.msg);
			}
		});		
	});
}

/*管理员-编辑*/
function user_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
			// var data={edit_id:id};
			// $.get(url,data,function(){

			// },"json")
}
/*管理员-停用*/
function user_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		
		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="user_start(this,id)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');
		$(obj).remove();
		layer.msg('已停用!',{icon: 5,time:1000});
	});
}
// 批量删除
 function    datadel(){
             var  shu=<?php echo ($adminCount); ?>-1;

      // layer.confirm('确认要删除吗？',function(){
       for (var i = shu; i >=0; i--) {
       	!function(i){
             if($('.use').eq(i).is(":checked")){

               var  id=$('.use').eq(i).val();
               
               // alert(id);
               var  obj=$('.use').eq(i);
               $.ajax({
			type: 'POST',
			url: 'http://localhost:8081/hongsanzu/ask/thinkphp-3.2/admin/user/Userdel',
			data:{del_id:id},
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				
			},
			error:function(data) {
				console.log(data.msg);
			}
		});		

     		
     	}
             
       	}(i);
      	
     	

     };
    
         

		
	// });
              // layer.msg('已删除!',{icon:1,time:1000});
				refresh();
     }

/*管理员-启用*/
function user_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		
		
		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="user_stop(this,id)" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
		$(obj).remove();
		layer.msg('已启用!', {icon: 6,time:1000});
	});
}
//刷新界面
function refresh(){
	location.replace(location.href);
}

</script>
</body>
</html>