<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends CI_Controller{
    protected $_ci;
    function __construct(){
        $this->_ci= &get_instance();
    }
    function adminTemplate($template, $data=null){
        $data['_content']=$this->_ci->load->view($template,$data, true);
        $data['_header']=$this->_ci->load->view('admin/adminHeader',$data, true);
        $data['_sidebar']=$this->_ci->load->view('admin/adminSideBar',$data, true);
        $data['_footer']=$this->_ci->load->view('admin/adminFooter',$data, true);
        $this->_ci->load->view('/admin/adminTemp.php',$data);
    }
}