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
        $data['title'] = 'Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/index', $data);
        $this->load->view('templates/footer');
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

     public function hapus($id)
    {
        $this->Data_model->hapus($id);
        $this->session->set_flashdata('success', 'Data Status Berhasil dihapus');
        redirect('data/inputstatus'); //redirect
    }
}
