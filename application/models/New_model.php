<?php
class New_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function test_method(){
		echo "CALLING FROM MODEL<br>";
	}
}
?>
