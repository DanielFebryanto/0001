<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library(array('template'));
    }
    function listCategories(){
    	$data['title'] = 'Categories';
    	$this->template->adminTemplate('admin/categories', $data);
    }
    function formCategories(){
    	$this->load->view('admin/partialFormCategories');
    }
}