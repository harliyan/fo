<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index()
    {
        $data['title'] = 'Peta Persebaran Kabel FO Kota Pekalongan';
        $data['desc'] = $this->db->get_where('desc')->row_array();
        $data['view']   = $this->Home_model->peta();  
        $data['kecamatan']    = "home";
        $data['get_barat_count']    = $this->Home_model->get_barat_count();
        $data['get_utara_count']    = $this->Home_model->get_utara_count();
        $data['get_timur_count']    = $this->Home_model->get_timur_count();
        $data['get_selatan_count']  = $this->Home_model->get_selatan_count();
        $data['get_all_count']  = $this->Home_model->get_all_count();
        $data['get_baik']   = $this->Home_model->get_baik();
        $data['get_kurang_baik']    = $this->Home_model->get_kurang_baik();
        $data['get_tidak_baik'] = $this->Home_model->get_tidak_baik();
        $data['get_belum']  = $this->Home_model->get_belum();
        $data['get_pc_layak']   = $this->Home_model->get_pc_layak();
        $data['get_pc_tidaklayak']  = $this->Home_model->get_pc_tidaklayak();
        $data['get_jaringan_layak'] = $this->Home_model->get_jaringan_layak();
        $data['get_jaringan_tidaklayak']    = $this->Home_model->get_jaringan_tidaklayak();
        $data['get_printer_layak']  = $this->Home_model->get_printer_layak();
        $data['get_printer_tidaklayak'] = $this->Home_model->get_printer_tidaklayak();
        $data['get_listrik_layak']  = $this->Home_model->get_listrik_layak();
        $data['get_listrik_tidaklayak'] = $this->Home_model->get_listrik_tidaklayak();

        $data['active_view']    = "home/index";
        $this->load->view('templates/frontend/index', $data);

    }

}
