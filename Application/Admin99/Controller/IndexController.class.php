<?php
namespace Admin99\Controller;
use Common\Controller\CommonLoginController;
Class IndexController extends CommonLoginController {
		public function index(){
			$this->redirect("User/Index");
			
		}
}