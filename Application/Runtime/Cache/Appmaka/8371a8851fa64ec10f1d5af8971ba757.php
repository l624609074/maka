<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<meta http-equiv="cleartype" content="on">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="">
<title>玛卡</title>
<link href="/maka/Public/Appmaka/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="bg">
  <div><img src="/maka/Public/Appmaka/images/maka1.jpg" style="width:100%;" /></div>
  <div><img src="/maka/Public/Appmaka/images/maka2.jpg" style="width:100%;" /></div>
  <div><img src="/maka/Public/Appmaka/images/maka3.jpg" style="width:100%;" /></div>
  <div><img src="/maka/Public/Appmaka/images/maka4.jpg" style="width:100%;" /></div>
  <div><img src="/maka/Public/Appmaka/images/maka6.jpg" style="width:100%;" /></div>
  <div class="maka7"> <img src="/maka/Public/Appmaka/images/maka7.jpg" style="width:100%;" />
    <div class="maka7_t"> <a href="#maka10"></a> <a href="#maka10"></a> <a href="#maka10"></a> <a href="#maka10" style="margin:0;"></a> </div>
  </div>
  <div><img src="/maka/Public/Appmaka/images/maka8.jpg" style="width:100%;" /></div>
  <div><img src="/maka/Public/Appmaka/images/maka9.jpg" style="width:100%;" /></div>
  <div class="maka10" id="maka10">
    <div class="maka10_img"> <img src="/maka/Public/Appmaka/images/maka10.jpg" style="width:100%;" /> </div>
    <div class="maka10_t">
      <form method="POST" action="/maka/index.php/Appmaka/SubOrder/submit" onsubmit="return mycheck()" name="form1">
        <div class="line_div"> <span class="text">选择产品</span>
          <div class="input_div">
            <select name="productid" class="productid">
               <?php if(is_array($data)): foreach($data as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>" style="color:#000000;"><?php echo ($vo["productname"]); ?>  ￥<?php echo ($vo["price"]); ?></option><?php endforeach; endif; ?>
            </select>
          </div>
          <div class="both"></div>
        </div>
        <div class="line_div"> <span class="text">姓　　名</span>
          <div class="input_div">
            <input type="text" name="name" value="" class="text"/>
          </div>
          <div class="both"></div>
        </div>
        <div class="line_div"> <span class="text">联系电话</span>
          <div class="input_div">
            <input type="text" name="contact" value="" class="text"/>
          </div>
          <div class="both"></div>
        </div>
        <div class="line_div"> <span class="text">城市地区</span>
          <div class="input_div">
            <div class="city">
              <select class="prov" id="prov" name="prov" onChange="changeComplexProvince(this.value, sub_array, 'cityselect', 'dist');">
              </select>
              <select id="cityselect" class="cityselect" name="cityselect" onChange="changeCity(this.value,'dist','dist');">
              </select>
              <select class="dist" id="dist" name="dist">
              </select>
            </div>
          </div>
          <div class="both"></div>
        </div>
        <div class="line_div"> <span class="text">详细地址</span>
          <div class="input_div">
            <input type="text" name="address" value="" class="text address"/>
          </div>
          <div class="both"></div>
        </div>
        <div class="line_div"> <span class="text">付款方式</span>
          <div class="input_div">
            <label>
              <input checked="checked" type="radio" name="payment" class="payment" value="货到付款"/>
              货到付款 </label>
			  <label>
           </div>
          <div class="both"></div>
        </div>
		  <div class="line_div" style="height:auto;"> <span class="text">验证码</span>
          <div class="input_div">
           <input type="text" name="verify" /> <img src="/maka/index.php/Appmaka/Verify/getVerifyCode"  style=" margin-left:2%; width:60%;" border="0" align="absmiddle" style="cursor:pointer;"  onclick="phpsys_update_code(this)" id="codeImg" > 
          </div>
          <div class="both"></div>
        </div>
        <div class="line_div" style="height:auto;"> <span class="text">留　　言</span>
          <div class="input_div">
            <textarea name="word" class="word"></textarea>
          </div>
          <div class="both"></div>
        </div>
        <div class="line_div_submit">
          <input type="submit" name="submit" class="submit" value="确认购买">
          <input type="reset" name="reset" class="submit submit_reset" value="清空表单">
        </div>
      </form>
    </div>
  </div>
  <div class="bottom"><img src="/maka/Public/Appmaka/images/bottom.png" style="width:100%;" /></div>
  <div id="bottomContent"><img src="/maka/Public/Appmaka/images/maka11.jpg" style="width:100%;" />
    <div class="maka10_b"> <a href="http://ala.zoossoft.com/LR/Chatpre.aspx?id=ALA96738846&lng=cn&p=www.dns-sh.com"></a> <a href="#maka10"></a> <a href="tel:400-666-5145"></a> </div>
  </div>
</div>
<script src="/maka/Public/Appmaka/js/jqjs"></script>
<script src="/maka/Public/Appmaka/js/Area.js" type="text/javascript"></script>
<script src="/maka/Public/Appmaka/js/AreaData_min.js" type="text/javascript"></script>
<script>
/* 表单判断 */
function mycheck(){
	var isMobile = /^(?:13\d|15\d|18\d)\d{5}(\d{3}|\*{3})$/; //手机号码验证规则
	var isPhone = /^((0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/;   //座机验证规则
	var tel = document.form1.contact.value;
	if(document.form1.name.value ==""){
		alert("您的姓名不能为空！");
		document.form1.name.focus();
		return false;
	}
	if(tel ==""){
		alert("联系电话不能为空！");
		document.form1.contact.focus();
		return false;
	}
	if(!isMobile.test(tel) && !isPhone.test(tel)){ //如果用户输入的值不同时满足手机号和座机号的正则
		alert("请正确填写电话号码，例如:13415764179或020-61396139");  //就弹出提示信息
		document.form1.contact.focus();
		return false; //返回一个错误，不向下执行
	}
	if(document.form1.prov.value == "" || document.form1.prov.value == "请选择"){
		alert("城市不能为空！");
		document.form1.prov.focus();
		return false;
	}
	if(document.form1.city.value == "" || document.form1.city.value == "请选择"){
		alert("地区不能为空！");
		document.form1.city.focus();
		return false;
	}
	return false;
	
}
//得到地区码
function getAreaID(){
	var area = 0;          
	if($("#dist").val() != "0"){
		area = $("#dist").val();                
	}else if ($("#cityselect").val() != "0"){
		area = $("#cityselect").val();
	}else{
		area = $("#prov").val();
	}
	return area;
}

//根据地区码查询地区名
function getAreaNamebyID(areaID){
	var areaName = "";
	if(areaID.length == 2){
		areaName = area_array[areaID];
	}else if(areaID.length == 4){
		var index1 = areaID.substring(0, 2);
		areaName = area_array[index1] + sub_array[index1][areaID];
	}else if(areaID.length == 6){
		var index1 = areaID.substring(0, 2);
		var index2 = areaID.substring(0, 4);
		areaName = area_array[index1] + sub_array[index1][index2] + sub_arr[index2][areaID];
	}
	return areaName;
}
$(document).ready(function() {
	$('.prov').blur(function(){
		//地区码
		var areaID = getAreaID();
		//地区名
		var areaName = getAreaNamebyID(areaID) ;
		if(areaName != '请选择'){
			$('.address').val(areaName);
		}
	});
	$('.cityselect').blur(function(){
		//地区码
		var areaID = getAreaID();
		//地区名
		var areaName = getAreaNamebyID(areaID) ;
		if(areaName != '请选择'){
			$('.address').val(areaName);
		}
		
	});
	$('.dist').blur(function(){
		//地区码
		var areaID = getAreaID();
		//地区名
		var areaName = getAreaNamebyID(areaID) ;
		if(areaName != '请选择'){
			$('.address').val(areaName);
		}
	});
	initComplexArea('prov', 'cityselect', 'dist', area_array, sub_array, '0', '0', '0');
});
</script>
</body>
</html>