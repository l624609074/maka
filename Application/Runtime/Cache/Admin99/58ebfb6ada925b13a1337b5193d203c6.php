<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>99培元-后台订单修改管理</title>
    <link rel="stylesheet" href="/web/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/web/Public/Admin/css/admin.css">
    <link rel="stylesheet" href="/web/Public/Admin/css/float.css">
   
    <link rel="stylesheet" href="/web/Public/Admin/css/pagination.css">
    <script src="/web/Public/js/jq.js"></script>
    <script src="/web/Public/Admin/js/pintuer.js"></script>
    <script src="/web/Public/Admin/js/respond.js"></script>
    <script src="/web/Public/Admin/js/admin.js"></script>

    
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
              
              
                <li class="active"><a href="/web/index.php/Admin99/User/index/System/Maka" class="icon-shopping-cart" class="icon-file-text" > 订单管理</a>	<ul><li><li class="active"><a href="/web/index.php/Admin99/User/index/System/Maka">玛卡订单管理</a><li><a href="/web/index.php/Admin99/Order/Search/System/<?php echo ($System); ?>" >订单搜索</a><li><a href="/web/index.php/Admin99/Product/All/System/Maka">产品设定</a></li><li><a href="/web/index.php/Admin99/Advisory/Index/System/Maka">美容测试</a></li></ul>
                </li>       <li class="active"  ><a href="/web/index.php/Admin99/User/index/System/Ejiao" class="icon-shopping-cart"  style="margin-left:300px;background:white;border:1px solid #09c;border-bottom:none;color:#09c" class="icon-file-text" >阿胶订单管理</a>
               
            </ul>
        </div>
        <div class="admin-bread" >
            <span>您好，<font style="color:red" ><?php echo (session('useradmin')); ?> </font>，欢迎您。</span>
            <ul class="bread">
                <li><a href="/web/index.php/Admin99/User/index/System/<?php echo ($System); ?>" class="icon-home"> 开始</a></li>
                
                <li>添加新订单</li>
            </ul>
			    
			
        </div>
    </div>
</div>

<div class="admin">
	
    <div class="panel admin-panel">
	<form action="/web/index.php/Home/SubOrder/submit/System/<?php echo ($System); ?>" method="POST">
	
				  <table class="table table-hover" border=1 style="text-align:center">
						<input type="hidden" value="PC" name="client"  />
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
			<tr><td width="50%">操作</td><td><input type="submit"  value="提交订单" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onClick="javascript:history.go(-1);" value="返回" /> </td></tr>
				
	
		
		
		</table>
		    </form>
    </div>

    <br />

    <p class="text-center">Power By Blues &copy; 2015</p>
</div>


</body>
</html>