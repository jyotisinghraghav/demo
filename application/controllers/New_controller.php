<?php
class New_controller extends CI_Controller{
	function new_controller_method(){
		//load view
		echo "Going for loading view<br>";
		$this->load->view("view_name");
		//load method
		echo "Going for loading model<br>";
		$this->load->model("Model_name",'',true);
		$this->Model_name->model_method();
	}
}
