<?php
namespace Common\Controller;
use Think\Controller;
Class UserCommonController extends Controller {        //继承基本的user类库
   
   //登陆判断 
     public function _initialize(){
       // 自动运行方法
	    $actionName= ACTION_NAME ;
		if($actionName!="loginIndex"){
			  if(session('useradmin')){
		   
		   //跳转到 操作界面，无需登陆
		   $this->redirect("User/Index");
		   
	   }else{
		   
		   $this->display("User/loginIndex");
		   
	   }
			
			
		}
	 
	   
	   
   } 
   
	//注册
	//登陆
	//验证
	

}