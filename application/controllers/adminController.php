<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library(array('template'));

    }
    function index(){
    	$data['dd'] = '';
    	$this->template->adminTemplate('admin/home', $data);
    }

    function formLogin(){
    	$this->load->view('admin/login');
    }
}