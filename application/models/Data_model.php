<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_model extends CI_Model
{
	public function getSubMenu()
	{
		$query = "SELECT `user_sub_menu` .*, `user_menu`.`menu`
		FROM `user_sub_menu` JOIN `user_menu`
		ON `user_sub_menu`. `menu_id` = `user_menu`.`id`
		";

		return $this->db->query($query)->result_array();
	}

	public function hapus($id)
	{
		$hasil = $this->db->query("DELETE FROM status_perangkat WHERE id_status='$id'");
		return $hasil;
	}

}
