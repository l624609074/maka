<?php
namespace Admin99\Model;
use Think\Model;
Class VerifyModel extends Model{
	
	protected $autoCheckFields =false;  
		protected $_validate=array(
			array('username','require',"用户名未填写"),         //用户名
			array('password','require','密码未填写'),         //密码
			array('verifyCode','checkCode','验证码输入错误',0,'callback',1),          //验证码
		
		
		
		);
		protected function checkCode($code){
			if(md5($code)!=session("verify")){
				//验证码不正确！
				
				return false;
				
			}else{
				return true;
				
				
			}
			
			
		}
	}