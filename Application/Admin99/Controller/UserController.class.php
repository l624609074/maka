<?php
namespace Admin99\Controller;
use Common\Controller\UserCommonController;
Class UserController extends UserCommonController {        //�̳л�����user���
  
	
	public function reg(){
		//ע�� undefined
		
	}

	public function login(){
		//��½	

		//��֤ ����Ϸ��ԣ���֤��֮���
		$verify=D("Verify"); 
		
		if(!$verify->create()){
			$this->error($verify->getError(),'loginIndex');	
			
		}
 
		$user=M("user");
		
		//�û���½��Ϣ����֤
		$username=checkInput(I('post.username',''));
		$password=checkInput(I('post.password',''));
		$where=array(
				"username"=>$username,
				"password"=>$password,
		);
		//��֤�û�
		var_dump($where);
		$findData=$user->where($where)->find();
		$userid=$findData['id'];
		if($findData){
			//���� session �ж��û�
			$_SEESION['useradmin']=$userid;
			//$this->success('��½�ɹ�����ת��.....','index');
		}else{
			$this->error("��Ǹ���������˺Ż�������������������룡������������ϵ����Ա��лл������",'loginIndex');
			
		}
		
		
	}

	
	public function index(){
		
		
		
		
    }

	public  function checkInput($value)
	  {
					// Stripslashes  ,ͨ��ħ�����������Զ����ת���
				if (get_magic_quotes_gpc())          //�ж��Ƿ����� ħ������
				{
					$value = stripslashes($value);
				}
				// Quote if not a number
				if (!is_numeric($value))                    //���������ͣ������  �ַ���������ת�庯������
				{
				$value = "'" . mysql_real_escape_string($value) . "'";
				}
				return $value;
					
	
	}

	

	
}