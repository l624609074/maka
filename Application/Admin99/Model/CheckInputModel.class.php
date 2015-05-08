<?php
namespace Admin99\Model;
use Think\Model;
Class CheckInputModel extends Model{
	protected $autoCheckFields =false;  
	protected  function myCheck($value)
	  {
					// Stripslashes  ,通过魔术方法加入自动添加转义符
				if (get_magic_quotes_gpc())          //判断是否开启了 魔术方法
				{
					$value = stripslashes($value);
				}
				// Quote if not a number
				if (!is_numeric($value))                    //非数字类型，则进行  字符串的特殊转义函数处理
				{
				$value = "'" . mysql_real_escape_string($value) . "'";
				}
				return $value;
					
	
	}
}