<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library(array('template'));
    }
    function index(){
        redirect('admin/home');
    	
    }

    function home(){
        $data['title'] = ' Home';
        $this->template->adminTemplate('admin/home', $data);
    }
    function formLogin(){
        $data['title'] = 'Menu List';
    	$this->load->view('admin/login');
    }

    function doLogin(){
        
    }
    function categories(){
        $data['title'] = 'Menu List';
    	$this->template->adminTemplate('admin/categories', $data);
    }
    
    function createKategori(){

    }

    
}//end of class