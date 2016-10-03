<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends CI_Controller{
    protected $_ci;
    function __construct(){
        $this->_ci= &get_instance();
    }
    function adminTemplate($template, $data=null){
        $data['_adminContent']=$this->_ci->load->view($template,$data, true);
        $data['_adminHeader']=$this->_ci->load->view('admin/adminHeader',$data, true);
        $data['_adminSideBar']=$this->_ci->load->view('admin/adminSideBar',$data, true);
        $data['_adminFooter']=$this->_ci->load->view('admin/adminFooter',$data, true);
        $data['_adminNotif']=$this->_ci->load->view('admin/adminNotif',$data, true);
        $this->_ci->load->view('/admin/adminTemp.php',$data);
    }

    function jurnalisTemplate($template, $data=null){
        $data['_content']=$this->_ci->load->view($template,$data, true);
        $data['_header']=$this->_ci->load->view('jurnalis/jurnalisHeader',$data, true);
        $data['_side']=$this->_ci->load->view('jurnalis/jurnalisSideBar',$data, true);
        //$data['_adminFooter']=$this->_ci->load->view('admin/adminFooter',$data, true);
       // $data['_adminNotif']=$this->_ci->load->view('admin/adminNotif',$data, true);
        $this->_ci->load->view('/jurnalis/jurnalisTemp.php',$data);
    }
}