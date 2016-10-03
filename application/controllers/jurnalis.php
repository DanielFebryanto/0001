<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurnalis extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library(array('template'));
    }
    
	function index(){
		$data['title'] = 'Home';
        $this->template->jurnalisTemplate('jurnalis/home');
	}

	function listArticles(){
		$data['title'] = 'Articles';
		$data['tableName'] = 'Articles Table';
		$this->template->jurnalisTemplate('jurnalis/table', $data);	
	}
	function formArticle(){
		$data['title'] = 'Create Article';

		$this->template->jurnalisTemplate('jurnalis/formArticle', $data);	
	}

	function listComment(){
		$data['title'] = 'Comments';
		$data['tableName'] = 'Comments Table';

		$this->template->jurnalisTemplate('jurnalis/table', $data);	
	}
}