<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
	echo __CLASS__ . "=" . __FUNCTION__;
    }

    public function test() {
		
	echo "I am test function under index module.";
    }
}
