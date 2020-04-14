<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
	
	public function tampil() {
		$this->db->select('tb_telecenter.*, tb_kecamatan.*');
		$this->db->from('tb_telecenter');
		$this->db->join('tb_kecamatan', 'tb_telecenter.id_kecamatan = tb_kecamatan.id_kecamatan');
		return $this->db->get()->result();
	}

	public function peta() {
		$this->db->select('tb_telecenter.*, tb_tambahan.*');
		$this->db->from('tb_telecenter');
		$this->db->join('tb_tambahan', 'tb_telecenter.id_telecenter = tb_tambahan.id_telecenter');
		// $where = "id_kecamatan='1'";
		// $this->db->where($where);
		return $this->db->get()->result();
	}

	public function utara() {
		$this->db->select('tb_telecenter.*, tb_tambahan.*');
		$this->db->from('tb_telecenter');
		$this->db->join('tb_tambahan', 'tb_telecenter.id_telecenter = tb_tambahan.id_telecenter');
		$where = "id_kecamatan='2'";
		$this->db->where($where);
		return $this->db->get()->result();
	}

	public function timur() {
		$this->db->select('tb_telecenter.*, tb_tambahan.*');
		$this->db->from('tb_telecenter');
		$this->db->join('tb_tambahan', 'tb_telecenter.id_telecenter = tb_tambahan.id_telecenter');
		$where = "id_kecamatan='3'";
		$this->db->where($where);
		return $this->db->get()->result();
	}

	public function selatan() {
		$this->db->select('tb_telecenter.*, tb_tambahan.*');
		$this->db->from('tb_telecenter');
		$this->db->join('tb_tambahan', 'tb_telecenter.id_telecenter = tb_tambahan.id_telecenter');
		$where = "id_kecamatan='4'";
		$this->db->where($where);
		return $this->db->get()->result();
	}

	public function barat() {
		$this->db->select('tb_telecenter.*, tb_tambahan.*');
		$this->db->from('tb_telecenter');
		$this->db->join('tb_tambahan', 'tb_telecenter.id_telecenter = tb_tambahan.id_telecenter');
		$where = "id_kecamatan='1'";
		$this->db->where($where);
		return $this->db->get()->result();
	}

	// search
	public function get_product_keyword_home($keyword){
		$this->db->select('tb_telecenter.*, tb_tambahan.*');
		$this->db->from('tb_telecenter');
		$this->db->join('tb_tambahan', 'tb_telecenter.id_telecenter = tb_tambahan.id_telecenter');
		$where = "id_kecamatan='1'";
		$this->db->where($where);
		$this->db->like('nama_telecenter',$keyword);
		$this->db->or_like('nama_pengelola',$keyword);
		return $this->db->get()->result();
	}
	// end search


	public function edit_details($where,$table){

		return $this->db->get_where($table, $where);
	}

	public function update_details($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function getDetail($table, $id)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join('tb_tambahan', 'tb_telecenter.id_telecenter = tb_tambahan.id_telecenter','left');
		$this->db->where('tb_tambahan.id_telecenter',$id);
		return $this->db->get()->result();
	}

public function get_barat_count() {
		$sql = " SELECT count(*) as count from tb_telecenter where id_kecamatan = '1' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_utara_count() {
		$sql = " SELECT count(*) as count from tb_telecenter where id_kecamatan = '2' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_timur_count() {
		$sql = " SELECT count(*) as count from tb_telecenter where id_kecamatan = '3' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_selatan_count() {
		$sql = " SELECT count(*) as count from tb_telecenter where id_kecamatan = '4' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_all_count() {
		$sql = " SELECT count(*) as count from tb_telecenter" ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_baik() {
		$sql = " SELECT count(*) as count from tb_telecenter where ket_1 = 'Baik' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_kurang_baik() {
		$sql = " SELECT count(*) as count from tb_telecenter where ket_1 = 'Kurang Baik' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_tidak_baik() {
		$sql = " SELECT count(*) as count from tb_telecenter where ket_1 = 'Tidak Baik' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_belum() {
		$sql = " SELECT count(*) as count from tb_telecenter where ket_1 = 'Belum Ada Status' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_pc_layak() {
		$sql = " SELECT count(*) as count from tb_telecenter where pc_status = 'Layak' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_pc_tidaklayak() {
		$sql = " SELECT count(*) as count from tb_telecenter where pc_status = 'Tidak Layak' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_jaringan_layak() {
		$sql = " SELECT count(*) as count from tb_telecenter where jaringan_status = 'Layak' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_jaringan_tidaklayak() {
		$sql = " SELECT count(*) as count from tb_telecenter where jaringan_status = 'Tidak Layak' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_printer_layak() {
		$sql = " SELECT count(*) as count from tb_telecenter where printer_status = 'Layak' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_printer_tidaklayak() {
		$sql = " SELECT count(*) as count from tb_telecenter where printer_status = 'Tidak Layak' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_listrik_layak() {
		$sql = " SELECT count(*) as count from tb_telecenter where listrik_status = 'Layak' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_listrik_tidaklayak() {
		$sql = " SELECT count(*) as count from tb_telecenter where listrik_status = 'Tidak Layak' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_home() {
		$sql = " SELECT count(*) as count from tb_telecenter where ket_1 = 'Belum Ada Status' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}
	
}