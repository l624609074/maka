<?php
/*
	�������� ��������

*/
	namespace Admin99\Controller;
	use Common\Controller\CommonLoginController;
	Class OrderController extends CommonLoginController{
		
		//ȷ��
		public function confirm(){
			$order=M("order");
			$orderid=I("post.orderid");
			$data["orderid"]=$orderid;
			if($order->save($data)){
				return true;
				
				
			}else{
				
				return false;
				
			}
			
		}
		
		
		//����
		
		
			//ɾ��
		
		//��
		
	
		
		//��
		function All(){
			$this->redirect("User/Index");
			
		}
	
	
	}