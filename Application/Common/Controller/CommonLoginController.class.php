<?php
namespace Common\Controller;
use Think\Controller;
Class CommonLoginController extends Controller {        //继承基本的user类库
   
   //登陆判断 
     public function _initialize(){
       // 自动运行方法
	   $controllerName=strtolower(CONTROLLER_NAME);
	   if($controllerName!=strtolower("login")){
		    if(session('useradmin')){
		   
		   //跳转到 操作界面，无需登陆
			$this->display("User:Index");
		   
			}else{
		   
				$this->display("Login:login");
		   
			} 
		   
		   
	   }
	   
	   
	   
   } 
   
	//注册
	//登陆
	//验证
	

}