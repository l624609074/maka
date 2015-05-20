<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>99培元-后台订单修改管理</title>
    <link rel="stylesheet" href="/maka/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/maka/Public/Admin/css/admin.css">
    <link rel="stylesheet" href="/maka/Public/Admin/css/float.css">
   
    <link rel="stylesheet" href="/maka/Public/Admin/css/pagination.css">
    <script src="/maka/Public/js/jq.js"></script>
    <script src="/maka/Public/Admin/js/pintuer.js"></script>
    <script src="/maka/Public/Admin/js/respond.js"></script>
    <script src="/maka/Public/Admin/js/admin.js"></script>

    
</head>

<body>
<div class="lefter">
    <div class="logo"><a href="#" target="_blank"><img src="/maka/Public/Admin/images/logo.png" alt="后台管理系统" /></a></div>
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
					<ul><li><a href="#"> </a></li><li class="active"><a href="/maka/index.php/Admin99/User">订单管理</a><li><a href="/maka/index.php/Admin99/Search">订单搜索</a><li><a href="/maka/index.php/Admin99/Product/All">产品设定</a></li><li><a href="/maka/index.php/Admin99/Advisory/Index">美容测试</a></li></ul>
                </li>
               
            </ul>
        </div>
        <div class="admin-bread" >
            <span>您好，<font style="color:red" ><?php echo (session('useradmin')); ?> </font>，欢迎您。</span>
            <ul class="bread">
                <li><a href="/maka/index.php/Admin99/User" class="icon-home"> 开始</a></li>
                
                <li>添加新订单</li>
            </ul>
			    
			
        </div>
    </div>
</div>

<div class="admin">
	
    <div class="panel admin-panel">
	<form action="/maka/index.php/Home/SubOrder/submit" method="POST">
	
				  <table class="table table-hover" border=1 style="text-align:center">
      
            	<input type="hidden" value="<?php echo (session('useradmin')); ?>" name="operator" />
            	<input type="hidden" value="<?php echo time();?>" name="uptime" />
				
			<tr><td width="50%">产品名字*盒数--总价格</td><td><select name="productid">
							<?php if(is_array($data)): foreach($data as $key=>$vo): ?><option  value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["productname"]); ?>--¥<?php echo ($vo["price"]); ?></option><?php endforeach; endif; ?>
							</select>
						</td></tr>
			<tr><td width="50%">客户名</td><td><input type="text" value="" name="name" /></td></tr>
			<tr><td width="50%">联系电话</td><td><input type="text" value="" name="contact" /></td></tr>
			<tr><td width="50%">联系地址</td><td><input type="text" value="" name="address" /></td></tr>
			<tr><td width="50%">用户留言</td><td><textarea name="word"  ></textarea></td></tr>
			<tr><td width="50%">付款方式</td><td><select><option value="0" selected >货到付款</option></select></td></tr>
		
					
						</select></td></tr>
			<tr><td width="50%">操作</td><td><input type="submit"  value="提交订单" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="javascript:history.go(-1);" value="返回" /> </td></tr>
				
	
		
		
		</table>
		    </form>
    </div>

    <br />

    <p class="text-center">Power By Blues &copy; 2015</p>
</div>


</body>
</html>