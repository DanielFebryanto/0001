<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library(array('template'));

    }
    function listMenu(){
    	$data['title'] = 'Menu List';
    	$this->template->adminTemplate('admin/tableMenu', $data);
    }
    
    function formMenu(){
        $this->load->view('admin/partialformMenu');
    }

    function createMenu(){
        
    }
    function listIcons(){
        $this->load->view('admin/listMenuPartial');
    }

    function listParentMenu($id){
    	$clause = array('position_id'=>$id);
    	$data['list'] = $this->menuModel->getMenuByClause($clause);

    	$this->load->view('admin/partialParentMenu', $data);
    }
}