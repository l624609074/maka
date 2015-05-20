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
				$data=$products->page($_GET['p'].',8')->select();
				$count=$products->count();
				$Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数
				$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
				
				$this->assign("data",$data);
				$this->assign("show",$show);
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
		function Delete(){
				$products=M("products");
				$data["id"]=I("get.id");
				if($products->where($data)->delete()){
					$this->success("删除产品信息成功！");
					
				}else{
					
					$this->error("删除产品信息失败！!");
				}
			
		}
		
		
	}