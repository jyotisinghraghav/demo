<?php
class Employee_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function get_department(){
           $this->db->select('department_id');
		   $this->db->select('department_name');
		   $this->db->from('tbl_department');
		   $query = $this->db->get();
		   $result = $query->result();
		   
		   $dep_id_arr = array('-Select-');
		   $dep_name_arr = array('-Select-');
		   $dep_result_arr = array();
		   foreach($result as $key=>$value){
			   $dep_id_arr[]= $result[$key]->department_id;
			   $dep_name_arr[] = $result[$key]->department_name;
		   }
		   $dep_result_arr  = array_combine($dep_id_arr,$dep_name_arr);
		   echo '<pre>';
		   print_r($dep_result_arr);
	}
}
