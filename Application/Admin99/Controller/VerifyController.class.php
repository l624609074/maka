<?php
namespace Admin99\Controller;
use Think\Controller;
Class verifyController extends Controller{
	
	function getVerifyCode(){
		//������֤��
	$Verify = new \Think\Verify();
	$Verify->fontSize = 27;
	$Verify->length   = 4;
	$Verify->imageW   =200;
	$Verify->imageH   = 50;
	$Verify->useNoise = false;
	$Verify->useImgBg = true; 
	$Verify->entry();
		
	}
	
	
}