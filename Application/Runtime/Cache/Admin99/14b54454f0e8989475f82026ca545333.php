<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>99培元-后台管理</title>
    <link rel="stylesheet" href="/maka/Public/Admin/css//pintuer.css">
    <link rel="stylesheet" href="/maka/Public/Admin/css//admin.css">
    <link rel="stylesheet" href="/maka/Public/Admin/css//page.css">
    <script src="/maka/Public/js/jq.js"></script>
    <script src="/maka/Public/Admin/js/pintuer.js"></script>
    <script src="/maka/Public/Admin/js/respond.js"></script>
    <script src="/maka/Public/Admin/js/admin.js"></script>
   
    
</head>

<body>
<div class="lefter">
    <div class="logo"><a href="#" target="_blank"><img src="/maka/Public/Admin/images//logo.png" alt="后台管理系统" /></a></div>
</div>
<div class="righter nav-navicon" id="admin-nav">
    <div class="mainer">
        <div class="admin-navbar">
            <span class="float-right">
            	<a class="button button-little bg-main" href="/maka/index.php">网站首页</a>
                <a class="button button-little bg-yellow" href="/maka/index.php/Admin99/Login/LoginOut">注销登录</a>
            </span>
            <ul class="nav nav-inline admin-nav">
              
              
                <li class="active"><a href="content.html" class="icon-shopping-cart" class="icon-file-text" > 订单管理</a>
					<ul><li><a href="#"> </a></li><li class="active"><a href="#">订单管理</a></li><li><a href="#">订单搜索</a></li><li><a href="#">产品设定</a></li></ul>
                </li>
               
            </ul>
        </div>
        <div class="admin-bread">
            <span>您好，<font style="color:red" ><?php echo (session('useradmin')); ?> </font>，欢迎您。</span>
            <ul class="bread">
                <li><a href="index.html" class="icon-home"> 开始</a></li>
                
                <li>订单管理</li>
            </ul>
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
            <input type="button" class="button button-small border-yellow" value="批量删除" />
           
        </div>
        <table class="table table-hover" border=1 style="text-align:center">
        	<tr><th width="35">选择</th>
			<th width="10%">订单号</th><th width="120">产品名字*盒数--总价格</th><th width="30">客户名</th><th width="100">联系电话</th><th width="100">联系地址</th><th width="20">付款方式</th><th width="100">用户留言</th><th width="20">下单时间</th><th width="60">订单状态</th><th width="100">快递公司--单号</th><th width="100">操作</th></tr>
            
            
				<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
						<td><input type="checkbox" name="orderid" value="<?php echo ($vo["orderid"]); ?>" /></td>
						<td><?php echo ($vo["orderid"]); ?></td><td><?php echo ($vo["productname"]); ?>--<?php echo ($vo["price"]); ?></td><td><?php echo ($vo["name"]); ?></td><td><?php echo ($vo["contact"]); ?></td><td><?php echo ($vo["address"]); ?></td><td><?php echo ($vo["payment"]); ?></td><td>
						
							<?php if(strlen($vo['word']) > 30 ): echo (substr($vo["word"],0,30)); ?><a href="" ><font color="red">...查看更多</font></a>
							<?php else: ?> 
									<?php echo ($vo["word"]); endif; ?>
					
						
				</td><td><?php echo (date("Y-m-d h:i:s",$vo["ordertime"])); ?></td>
				<td>
					
					    <?php switch($vo["status"]): case "0": ?><font color="red">未确认</font><?php break;?>
								<?php case "1": ?><font color="blue">已确认</font><?php break;?>
								<?php case "2": ?><font color="green">已发货</font><?php break;?>
								<?php default: endswitch;?>
					
				</td>


				<td><?php echo ($vo["expressname"]); ?>--<?php echo ($vo["expressnum"]); ?></td>		
						<td>
							<a class="button border-blue button-little" href="#">确认</a> 
							<a class="button border-yellow button-little" href="#" >发货</a>
							<a class="button border-yellow button-little" href="#" >修改</a>
							<a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
							
			
						</td>
						
					</tr><?php endforeach; endif; ?>
		
			
			
			
			
        
		
		
		</table>
        <div class="panel-foot text-center">
				<?php echo ($show); ?>
		
        
        </div>
    </div>
    </form>
    <br />
    <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">拼图前端框架</a>构建</p>
</div>

</body>
</html>