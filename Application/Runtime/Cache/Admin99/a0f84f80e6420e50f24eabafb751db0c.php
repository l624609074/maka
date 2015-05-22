<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>99培元-<?php echo ($System); ?>后台管理</title>
    <link rel="stylesheet" href="/web/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/web/Public/Admin/css/admin.css">
    <link rel="stylesheet" href="/web/Public/Admin/css/float.css">
   
    <link rel="stylesheet" href="/web/Public/Admin/css/pagination.css">
    <script src="/web/Public/js/jq.js"></script>
    <script src="/web/Public/Admin/js/pintuer.js"></script>
    <script src="/web/Public/Admin/js/respond.js"></script>
    <script src="/web/Public/Admin/js/admin.js"></script>
    <script src="/web/Public/Admin/js/order.js"></script>
   <script type="text/javascript"> 
			//显示灰色 jQuery 遮罩层 
		function showBg(orderid) { 
			var bh = $("body").height(); 
			var bw = $("body").width(); 
			$("#fullbg").css({ 
					height:bh, 
					width:bw, 
					display:"block" 
			}); 
			$("#dialog").show(); 
			$("input[name='orderIdHidden']").val(orderid);
			$("#add").text("订单["+orderid+"]--------------------");
			} 
			//关闭灰色 jQuery 遮罩 
			function closeBg() { 
				$("#fullbg,#dialog").hide(); 
				$("#orderIdHidden").val("");
				$("#add").text("");
			} 
</script>


    
</head>

<body>
<div class="lefter">
    <div class="logo"><a href="#" target="_blank"><img src="/web/Public/Admin/images/logo.png" alt="后台管理系统" /></a></div>
</div>
<div class="righter nav-navicon" id="admin-nav">
    <div class="mainer">
        <div class="admin-navbar">
            <span class="float-right">
            	<a class="button button-little bg-main" href="/web/index.php">网站首页</a>
                <a class="button button-little bg-yellow" href="/web/index.php/Admin99/Login/LoginOut">注销登录</a>
            </span>
            <ul class="nav nav-inline admin-nav">
				
							        <li class="active"><a href="/web/index.php/Admin99/User/index/System/<?php echo ($System); ?>" class="icon-shopping-cart" class="icon-file-text" >玛卡订单管理</a>
											<ul>
												
													<li ><a href="/web/index.php/Admin99/User/index/System/<?php echo ($System); ?>">订单管理</a><li><a href="/web/index.php/Admin99/Order/Search/System/<?php echo ($System); ?>">订单搜索</a></li><li><a href="/web/index.php/Admin99/Product/All/System/<?php echo ($System); ?>">产品设定</a></li><li><a href="/web/index.php/Admin99/Advisory/Index/System/<?php echo ($System); ?>">美容测试</a></li>  </li>
										   </ul>
					
				
				
									</li>
							
					
							
							<li class="active"  ><a href="/web/index.php/Admin99/User/index/System/Ejiao" class="icon-shopping-cart"  style="margin-left:300px;background:white;border:1px solid #09c;border-bottom:none;color:#09c" class="icon-file-text" >阿胶订单管理</a>
											
				
							</li>
				

				
				
        
          
              
               
            </ul>
        </div>
        <div class="admin-bread">
            <span>您好，<font style="color:red" ><?php echo (session('useradmin')); ?> </font>，欢迎您。</span>
            <ul class="bread">
                 <li><a href="/web/index.php/Admin99/User/index/System/<?php echo ($System); ?>" class="icon-home"> 开始</a></li>
                
                <li>订单管理</li>
            </ul>
        </div>
    </div>
</div>
<div style="text-align:center">
<div id="fullbg"></div> 
<div id="dialog"> 
<p class="close"><span id="add"></span><a href="#" onClick="closeBg();">关闭</a>  </p>
<div><center>
	<table>
			<tr><td>快递公司:&nbsp;&nbsp;</td><td><input type="text" name="expressName" /></td></tr>
			<tr><td>快递单号:&nbsp;&nbsp;</td><td><input type="text" name="expressNum" /></td></tr>
			
			<input type="hidden" name="orderIdHidden" value="" />
	</table>
<br/>
<br/>
<input type="button" value="提交" onClick="orderAction('sent','','/web/index.php/Admin99/Order','<?php echo ($System); ?>')" />
</center>

</div> 
</div> 
</div> 
<div class="admin">
	<form method="post">
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>订单列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="全选" />
			 <input type="button" class="button button-small border-blue" value="批量确认" />
            <input type="button" class="button button-small border-green" value="批量发货" />
            <input type="button" class="button button-small border-yellow" value="批量删除" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="button" class="button button-small border-yellow" value="添加新订单" onClick="window.location.href='/web/index.php/Admin99/Order/Add/System/<?php echo ($System); ?>'" />
           
        </div>
	
        <table class="table table-hover" border=1 style="text-align:center">
        	<tr><th width="35">选择</th>
			<th width="10%">订单号</th><th width="120">产品名字*盒数--总价格</th><th width="30">客户名</th><th width="100">联系电话</th><th width="100">联系地址</th><th width="20">付款方式</th><th width="100">用户留言</th><th width="20">下单时间</th><th width="60">订单状态</th><th>客户端</th><th width="100">快递公司--单号</th><th width="100">操作</th><th>客服</th></tr>
          
				<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>	
						<td><input type="checkbox" name="orderid" value="<?php echo ($vo["orderid"]); ?>" /></td>
						<td><?php echo ($vo["orderid"]); ?></td><td><?php echo ($vo["productname"]); ?>--<?php echo ($vo["price"]); ?></td><td><?php echo ($vo["name"]); ?></td><td><?php echo ($vo["contact"]); ?></td><td><?php echo ($vo["address"]); ?></td><td><?php echo ($vo["payment"]); ?></td><td>
						
							<?php if(strlen($vo['word']) > 30 ): echo (substr($vo["word"],0,30)); ?><a href="/web/index.php/Admin99/Order/Modify/orderid/<?php echo ($vo["orderid"]); ?>/System/<?php echo ($System); ?>" ><font color="red">...查看更多</font></a>
							<?php else: ?> 
									<?php echo ($vo["word"]); endif; ?>
					
						
				</td><td><?php echo (date("Y-m-d h:i:s",$vo["ordertime"])); ?></td>
				<td >
					
					    <?php switch($vo["status"]): case "0": ?><span id="<?php echo ($vo["orderid"]); ?>" ><font color="red">未确认</font></span><?php break;?>
								<?php case "1": ?><span id="<?php echo ($vo["orderid"]); ?>" ><font color="blue">已确认</font></span><?php break;?>
								<?php case "2": ?><span id="<?php echo ($vo["orderid"]); ?>" ><font color="green">已发货</font></span><?php break;?>
								<?php default: endswitch;?>
					
				</td>
				<td width=50><?php echo ($vo["client"]); ?></td>
				<td><?php echo ($vo["expressname"]); ?>--<?php echo ($vo["expressnum"]); ?></td>		
						<td>
							<a class="button border-blue button-little" href="#" onClick="orderAction('Confirm','<?php echo ($vo["orderid"]); ?>','/web/index.php/Admin99/Order','<?php echo ($System); ?>')" >确认</a> <a class="button border-green button-little" href="#" onClick="showBg('<?php echo ($vo["orderid"]); ?>','<?php echo ($System); ?>')" >发货</a>
							<a class="button border-yellow button-little" href="/web/index.php/Admin99/Order/Modify/orderid/<?php echo ($vo["orderid"]); ?>/System/<?php echo ($System); ?>"  onclick="" >修改</a>
							<a class="button border-red button-little" href="javascript:orderAction('Delete','<?php echo ($vo["orderid"]); ?>','/web/index.php/Admin99/Order','<?php echo ($System); ?>')" onClick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
							
			
						</td>
						
					<td width="50"><?php echo ($vo["operator"]); ?></td>
				
		
			</tr><?php endforeach; endif; ?>
			
        
		
		
		</table>
        <div class="panel-foot text-center">
			  <div class="pagination pagination-large"><?php echo ($show); ?></div>
		
        
        </div>
    </div>
    </form>
    <br />

    <p class="text-center">Power By Blues &copy; 2015</p>
</div>


</body>
</html>