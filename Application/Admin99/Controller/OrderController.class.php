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
			$orderid=I("get.orderid");
			$data["status"]=1;
			if($order->where("orderid = '{$orderid}'")->save($data)){
				echo $orderid;
				
				
			}else{
				
				echo "";
				
			}
			
		}
		
		
		//����
		
		public function sent(){
		
			$order=M("order");	
			$orderid=I("get.orderid");
			 $expressname=I("get.expressName");
			 $expressnum=I("get.expressNum");
			$data["expressname"]=$expressname;
			$data["expressnum"]=$expressnum;
			$data["status"]=1;
			$data["senttime"]=NOW_TIME;
			if($order->where("orderid = '{$orderid}'")->save($data)){
		
				
					echo "ok";
				
			}else{
			
				echo 0;
				
			}
			
			
		}
		
			//ɾ��
	public function delete(){
		
			$order=M("order");	
			$orderid=I("get.orderid");
			if($order->where("orderid = '{$orderid}'")->delete()){
		
				
					echo "ok";
				
			}else{
			
				echo 0;
				
			}
			
			
		}
		
		
		//��
	public function modify(){
		//���ǵ��� �޸����ݵķ���
		$order=M("order");	
		$orderid=I("get.orderid");
		//�������ݣ��������޸�
		$data=$order->where("orderid = '{$orderid}'")->select();
		//������Ʒѡ��
		$product=M("products");
		$productData=$product->select();
		$this->assign("productData",$productData);
		$this->assign("data",$data);
		$this->display();
		
		
	}
	
		
		//��
		
	
	
	}