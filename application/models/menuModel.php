<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuModel extends CI_Model {
	function getAllMenu(){
		$menu = $this->db->get('menus');
		return $menu;
	}

	function getMenuByClause($clause){
		$this->db->where($clause);
		$menu = $this->db->get('menus');

		return $menu;
	}

	function createMenu($value){
		$insert = $this->db->insert('menus',$value);

		if($menu){
			return true;
		}
		return false;
	}

	function updateMenu($clause, $value){
		$this->db->where($clause);
		$update = $this->db->update('menus',$value);

		if($update){
			return true
		}
		return false;
	}

	function deleteMenu($clause){
		$this->db->where($clause);
		$del = $this->db->delete('menus');

		if($del){
			return true
		}
		return false;
	}
}