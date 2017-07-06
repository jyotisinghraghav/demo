<?php
class Current extends CI_Controller{
	public function index(){
		    $this->load->library('session');
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->database();
			$this->load->library('form_validation');
			$this->load->model('Employee_model');
			$this->Employee_model->get_department();
	}
}
