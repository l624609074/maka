<?php
	namespace Home\Controller;
	use Think\Controller;
	Class SubOrderController extends Controller{
			//该类是前台提交订单类
			function submit(){
				
				//获取 自定义的 验证规则
				$verify=D("Verify"); 

				if(!$verify->create()){
				$this->error($verify->getError(),U('Index/Index#wyhp'));	
			
				} 
				$rules=array(
						  
						  array('status','0'), 
						
				);
				$order=M("order");
				if($order->create()){        //采用自动完成
					$order->ordertime=NOW_TIME;
					$id=$order->auto($rules)->add();
					if($id){
						$this->success("您的订单已经提交\n您的订单号是【{$id}】\n我们将在1个工作日和您联系！",U('Index/Index#wyhp'),4);
						
						
					}	
					
				}else{
					
					$this->error("提交订单失败，请联系管理员！",U("Index/Index#wyhp'"));
					
				}
				
				
				
			}
		
		
		
	}
	
	
	