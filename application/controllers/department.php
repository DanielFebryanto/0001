<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library(array('template'));
        $this->load->model(array('departmentModel'));
    }

    function listDepartment(){
    	$data['title'] = 'Department';
    	$this->template->adminTemplate('admin/department', $data);
    }

    function formDepartment(){
    	$this->load->view('admin/partialFormDepartment');
    }
    function createDepartment(){
    	$value = array(
    		'depName'=>$_POST['dep']
    		);
    	$insert = $this->departmentModel->createDepartment($value);

    	if ($insert == true) {
    		redirect('department/listDepartment');
    	}
    }

}