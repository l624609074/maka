<?php
namespace Appmaka\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		//调出产品的数据
		$product=M("products");
		$data=$product->select();
		$this->assign("data",$data);

        $this->display();
    }
}