<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		//判断是否手机端
		
		
		
		//调出产品的数据
		$product=M("products");
		$data=$product->select();
		$this->assign("data",$data);

        $this->display();
    }
}