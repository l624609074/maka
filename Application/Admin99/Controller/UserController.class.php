<?php
namespace Admin99\Controller;
use Common\Controller\UserCommonController;
Class UserController extends UserCommonController {        //继承基本的user类库
  
	
	public function reg(){
		//注册 undefined
		
	}

	public function login(){
		//登陆	

		//验证 输入合法性，验证码之类的
		$verify=D("Verify"); 
		
		if(!$verify->create()){
			$this->error($verify->getError(),'loginIndex');	
			
		}
 
		$user=M("user");
		
		//用户登陆信息的验证
		$username=checkInput(I('post.username',''));
		$password=checkInput(I('post.password',''));
		$where=array(
				"username"=>$username,
				"password"=>$password,
		);
		//验证用户
		var_dump($where);
		$findData=$user->where($where)->find();
		$userid=$findData['id'];
		if($findData){
			//放置 session 判断用户
			$_SEESION['useradmin']=$userid;
			//$this->success('登陆成功！跳转中.....','index');
		}else{
			$this->error("抱歉！您输入账号或者密码错误！请重新输入！如有疑问请联系管理员，谢谢合作！",'loginIndex');
			
		}
		
		
	}

	
	public function index(){
		
		
		
		
    }

	public  function checkInput($value)
	  {
					// Stripslashes  ,通过魔术方法加入自动添加转义符
				if (get_magic_quotes_gpc())          //判断是否开启了 魔术方法
				{
					$value = stripslashes($value);
				}
				// Quote if not a number
				if (!is_numeric($value))                    //非数字类型，则进行  字符串的特殊转义函数处理
				{
				$value = "'" . mysql_real_escape_string($value) . "'";
				}
				return $value;
					
	
	}

	

	
}