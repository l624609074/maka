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
			$orderid=I("get.orderid");
			$data["status"]=1;
			if($order->where("orderid = '{$orderid}'")->save($data)){
				echo $orderid;
				
				
			}else{
				
				echo "";
				
			}
			
		}
		
		
		//发货
		
		public function sent(){
		
			$order=M("order");	
			$orderid=I("get.orderid");
			 $expressname=I("get.expressName");
			 $expressnum=I("get.expressNum");
			$data["expressname"]=$expressname;
			$data["expressnum"]=$expressnum;
			$data["status"]=2;
			$data["senttime"]=NOW_TIME;
			if($order->where("orderid = '{$orderid}'")->save($data)){
		
				
					echo "ok";
				
			}else{
			
				echo 0;
				
			}
			
			
		}
		
			//删除
	public function delete(){
		
			$order=M("order");	
			$orderid=I("get.orderid");
			if($order->where("orderid = '{$orderid}'")->delete()){
		
				
					echo "ok";
				
			}else{
			
				echo 0;
				
			}
			
			
		}
		
		
		//改
	public function modify(){
		//这是调出 修改数据的方法
	
		$order=M("order");	
		$orderid=I("get.orderid");
		//调出数据，并进行修改
		$data=$order->where("orderid = '{$orderid}'")->select();
		//调出产品选择
		$product=M("products");
		$productData=$product->select();
		$this->assign("productData",$productData);
		$this->assign("hiddenOrderid",$orderid);
		$this->assign("data",$data);
		$this->display();
		
		
	}
	
	//修改操作
	
	public function doModify(){
		$order=M("order");	
			
			if($order->create()){
				if($order->save()){
					$this->success("修改成功！",U("User/Index"),3);
					
				}else{
					$this->error("无修改！");
				
				}
		
			}else{
				$this->error("修改失败！");
				
			}
			
	
			
		}

		//查
		
	
	
	}