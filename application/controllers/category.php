<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library(array('template'));
    }
}