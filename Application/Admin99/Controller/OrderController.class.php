<?php
/*
	该类用于 订单操作

*/
	namespace Admin99\Controller;
	use Common\Controller\CommonLoginController;
	Class OrderController extends CommonLoginController{
		
		//确认
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
		
		
		//发货
		
		
			//删除
		
		//改
		
	
		
		//查
		function All(){
			$this->redirect("User/Index");
			
		}
	
	
	}