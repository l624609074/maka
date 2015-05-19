<?php
	/*
	该类用于产品信息的操作

*/
	namespace Admin99\Controller;
	use Common\Controller\CommonLoginController;
	Class ProductController extends CommonLoginController{
			function All(){
				//默认显示全部
				$products=M("products");
				$data=$products->select();
				$this->assign("data",$data);
				$this->display();
				
			}
		
		//添加
		
		function Add(){
			$this->display();
			
		}
		function DoAdd(){
			$products=M("products");
			$ProductName=I("get.ProductName"); 
			$Price=I("get.Price");
			$data=array(
					"productname"=>$ProductName,
					"price"=>$Price,
					"uptime"=>NOW_TIME,
			);
				if($products->add($data)){
					
					$this->success("插入新的产品信息成功！","Add");
				}else{
					
					$this->error("插入新的产品信息失败!","Add");
				}
				
			
		
			
		}
		
		
		
		//修改
		function Modify(){
			$products=M("products");
			$where["id"]=I("get.id");
			$data=$products->where($where)->select();
			$this->assign("data",$data);
			
			$this->display();
			}
		
		function DoModify(){
			$products=M("products");
			$ProductName=I("get.ProductName"); 
			$Price=I("get.Price");
			$id=I("get.id");
			
			$data=array(
					"id"=>$id,
					"productname"=>$ProductName,
					"price"=>$Price,
					
			);
			
		
				if($products->save($data)){
					$this->success("更新的产品信息成功！","All");
					
				}else{
						$this->error("更新的产品信息失败！!");
					
				}
				
	
		}
		
		
		
		//删除
		
		
		
	}