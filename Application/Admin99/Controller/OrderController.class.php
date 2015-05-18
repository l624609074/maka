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
			$data["customer"]=session("useradmin");
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
			 $customer=session("useradmin");
			$data["expressname"]=$expressname;
			$data["expressnum"]=$expressnum;
			$data["status"]=2;
			$data["senttime"]=NOW_TIME;
			$data["customer"]= $customer;
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
		


		public function Search(){
				$this->display();
			
			}
		public function DoSearch(){
				$order=M("order");
				$SearchType=I("get.SearchType");
				switch($SearchType){       
					case "NoConfirm":    //未确定订单
							$where="status=0";
						
				
						break;	
						case "Confirm":    //确定订单
							$where="status=1";
						
				
						break;
						case "Sented":    //已经发货的订单
							$where="status=2";
						
				
						break;
						case "ExpressNum":    //快递单号搜索
							$ExpressNum=I("get.ExpressNum");
							$where="ExpressNum like '%{$ExpressNum}%'";
						
				
						break;	
						case "Name":    //名字搜索
							$Name=I("get.Name");
							$where="Name like '%{$Name}%'";
						
				
						break;
						case "OrderId":    //订单号搜索
							$OrderId=I("get.OrderId");
							$where="OrderId like '%{$OrderId}%'";
						
				
						break;	
						case "Contact":    //电话搜索
							$Contact=I("get.Contact");
							$where="Contact like '%{$Contact}%'";
						
				
						break;
						case "Date":    //日期范围搜索
						date_default_timezone_set("PRC"); 
							$Start=I("get.Start");
							$End=I("get.End");
							//转换时间戳
							$str1=" 00:00:00";
							$str2=" 23:59:59";
							 $StartStr=$Start.$str1;
							 $EndStr=$End.$str2;
							$StartUnix=strtotime($StartStr);
							$EndUnix=strtotime($EndStr);
							$where="ordertime between '{$StartUnix}' and '{$EndUnix}'";
						
				
						break;
					
					
					
					
					
				}
			
			
		$data = $order->join("LEFT JOIN __PRODUCTS__ ON __ORDER__.productid=__PRODUCTS__.id")->where($where)->order('ordertime')->page($_GET['p'].',8')->select();
		$count = $order->join("LEFT JOIN __PRODUCTS__ ON __ORDER__.productid=__PRODUCTS__.id")->where($where)->count();
	
		
		$Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数
		
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$this->assign('data',$data);// 赋值数据集$this->assign('page',$show);// 赋值分页输出
		$this->assign('show',$show);// 赋值数据集$this->assign('page',$show);// 赋值分页输出
		$this->display();
		}
		
		
		public function AllSent(){
			//批发发货
			$order=M("order");
			//$arr=I("get.AllSent");
			$arr=array(0=>"f9442fca944e",1=>"d9eddc4c2db2");
			$arrStr=implode(",",$arr);
			$data["status"]=2;
			$data["orderid"]=array("in",$arrStr);
			var_dump($data);
			if($order->save($data)){
				echo "ok!";
				
			}else{
				echo 0;
			}
			
			
		}
		
		
		
		
	}