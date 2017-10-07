<?php

namespace app\controller;

use think\Db;

class Index  extends \think\Controller
{
	public function index()
	{
		// find 只查找一条数据
		//$projects = Db::table("project")->find();
		$projects = Db::table("project")->select();
		
		$this->assign('projects', $projects);
		return	$this->fetch('index');		
	}	
	
	public function edit($id) {
		var_dump($id);
	}
	public function delete($id) {
		var_dump($id);
	}
	public function test_mysql(){
		$sql = "SELECT * FROM project";
		$result = Db::query($sql);
		
		dump($result);
	}
}
