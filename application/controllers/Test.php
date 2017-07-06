<?php
class Test extends CI_Controller{
	public function index(){
		echo "Index Function!!!<br>";
		$this->load->view('testhere/test');
		$this->load->model('new_model');
		$this->new_model->test_method();
	}
	public function hello(){
		echo "Hello function!!!";
	}
}

//page 18
