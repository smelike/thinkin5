<?php

namespace app\controller;

use think\Db;

class Index
{
	public function index()
	{
		echo __CLASS__ . __FUNCTION__;
	}	
	
	public function test_mysql(){
		$sql = "SELECT * FROM project";
		$result = Db::query($sql);
		
		dump($result);
	}
}
