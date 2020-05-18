 <?php
 defined('BASEPATH') or exit('No direct script access allowed');

 class Data extends CI_Controller
 {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Data_model');
    }

     public function index()
    {
        $data['title'] = 'Data Inventaris Fiber Optic';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Data_model', 'data');

        // $data['subMenu'] = $this->db->get('user_sub_menu')->result_array();
        $data['data'] = $this->data->data();
        $data['data_cluster'] = $this->Data_model->cluster_tampil();
        // $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('opd', 'Opd', 'required');
        // $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        // $this->form_validation->set_rules('url', 'URL', 'required');
        // $this->form_validation->set_rules('icon', 'Icon', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('data/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'opd' => $this->input->post('opd'),
                // 'menu_id' => $this->input->post('menu_id'),
                // 'url' => $this->input->post('url'),
                // 'icon' => $this->input->post('icon'),
                // 'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('data', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                New data inventaris added</div>');
            redirect('data');
        }
    }

       public function inputstatus()
    {
        $data['title'] = 'Input Status Perangkat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['status'] = $this->db->get('status_perangkat')->result_array();

        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('flag', 'Flag', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('data/inputstatus', $data);
            $this->load->view('templates/footer');
        } else {
             $data = [
                'status' => $this->input->post('status'),
                'flag' => $this->input->post('flag'),
            ];
            $this->db->insert('status_perangkat', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Status Perangkat added</div>');
            redirect('data/inputstatus');
        }
    }

     public function cluster()
    {
        $data['title'] = 'Cluster';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['cluster'] = $this->db->get('cluster')->result_array();

        $this->form_validation->set_rules('cluster', 'Cluster', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('data/cluster', $data);
            $this->load->view('templates/footer');
        } else {
             $data = [
                'cluster' => $this->input->post('cluster'),
            ];
            $this->db->insert('cluster', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Cluster added</div>');
            redirect('data/cluster');
        }
    }

    public function edit_cluster(){
        $id=$this->input->post('id');
        $cluster=$this->input->post('cluster');
        $this->Data_model->edit_cluster($id,$cluster);
        redirect('data/cluster');
    }

     public function hapus($id)
    {
        $this->Data_model->hapus($id);
        $this->session->set_flashdata('success', 'Data Status Berhasil dihapus');
        redirect('data/inputstatus'); //redirect
    }

    public function hapusdata($id)
    {
        $this->Data_model->hapuscluster($id);
        $this->session->set_flashdata('success', 'Data Cluster Berhasil dihapus');
        redirect('data'); //redirect
    }
}
