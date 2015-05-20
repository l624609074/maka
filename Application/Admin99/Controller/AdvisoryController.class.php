<?php
/*
		该类用于 操作用户的测试留言功能
*/
namespace Admin99\Controller;
use Common\Controller\CommonLoginController;
Class AdvisoryController extends CommonLoginController {
		function Index(){
			$Advisory=M("advisory");
			$data=$Advisory->page($_GET['p'].',5')->order("lefttime desc")->select();
			$count=$Advisory->count();
			$Page       = new \Think\Page($count,5);
			$show       = $Page->show();
			$this->assign("data",$data);
			$this->assign("show",$show);
			$this->display();
			
		}
		
		function ReCall(){
			$Advisory=M("advisory");
			
			$data["id"]=I("get.id");
			
			//开关状态
			$RecallStatus=I("get.RecallStatus");
			if($RecallStatus==0){       //界面为 0 ，即传过来是要修改为 1
					$data["recall"]=1;
			}else{
				$data["recall"]=0;
				
			}
			
			if($Advisory->save($data)){
				echo "ok";
			}else{
				
				echo "0";
				
			}
			
		}
		
		function Delete(){
				$Advisory=M("advisory");
				$data["id"]=I("get.id");
				if($Advisory->where($data)->delete()){
						echo "ok";
				}else{
				
				echo "0";
				
				}
				
				

		
			
		}
		
}