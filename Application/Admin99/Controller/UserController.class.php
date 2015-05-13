<?php
namespace Admin99\Controller;
use Common\Controller\CommonLoginController;
Class UserController extends CommonLoginController {        //继承基本的user类库
  	
	public function index(){
	
		$order=M("order");
		$data = $order->join("LEFT JOIN __PRODUCTS__ ON __ORDER__.productid=__PRODUCTS__.id")->order('ordertime')->limit($Page->firstRow.','.$Page->listRows)->select();
		$count=count($data);
		$Page       = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(18)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$this->assign('data',$data);// 赋值数据集$this->assign('page',$show);// 赋值分页输出
		$this->assign('show',$show);// 赋值数据集$this->assign('page',$show);// 赋值分页输出
		$this->display();
	
    } 
	public function reg(){
		//注册 undefined
		$this->display();
	}


	
		
		
	}

	
	

	

	

