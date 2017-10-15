<?php

namespace app\controller;

use think\Db;
use app\model\Project;

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
	
	public function test_model() {
		$project = Project::get(2);
		$project->name = "bex.one";
		$res = $project->save();
		if ($res) {
			echo "修改成功";
		} else {
			echo "修改失败";
		}
	}
	
	public function paginate() {
		
		$list = Db::name("project")->paginate(2);
		$this->assign('list', $list);
		
		return $this->fetch();
	}

	public function upload() {
		
		return $this->fetch();
	}
	
	public function captcha() {
		
	}
}
