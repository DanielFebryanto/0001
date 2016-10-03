<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DepartmentModel extends CI_Model {

	function createDepartment($value){
		$insert = $this->db->insert('departement',$value);

		if($insert){
			return true;
		}
		return false;
	}
}