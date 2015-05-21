<?php
namespace Ejiao\Controller;
use Think\Controller;
class IndexController extends Controller {
		
    public function Index(){
	//$appUrl=__APP__."/Appmaka/Index";
		//判断是否手机端
		$isMoblie=D("Phone");
		//var_dump($isMoblie);
		if($isMoblie->judge()){
			//手机端
			$this->redirect("/Appejiao/Index");
		}  
		
				//调出产品的数据
		$product=M("products");
		$data=$product->select();
		$this->assign("data",$data);
        $this->display();
    }
}