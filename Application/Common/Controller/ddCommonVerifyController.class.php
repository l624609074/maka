<?php
namespace Common\Controller;
use Think\Controller;
Class CommonVerifyController extends Controller{
	function getVerifyCode(){
		//������֤��
	$Verify = new \Think\Verify();
	$Verify->fontSize = 27;
	$Verify->length   = 4;
	$Verify->imageW   =200;
	$Verify->imageH   = 50;
	$Verify->useNoise = true;

	$Verify->entry();
		
	}
	
	
	
}