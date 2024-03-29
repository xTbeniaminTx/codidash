<?php
//if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    //------------------------------------------------------------------------------------------------------------------
    public function __construct()
    {
        parent::__construct();
        $user_id = $this->session->userdata('user_id');
        if (!$user_id) $this->logout();
    }
    //------------------------------------------------------------------------------------------------------------------

    //------------------------------------------------------------------------------------------------------------------
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/home
     *    - or -
     *        http://example.com/index.php/home/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/home/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('dashboard/inc/header_view');
        $this->load->view('dashboard/dashboard_view');
        $this->load->view('dashboard/inc/footer_view');
    }

    //------------------------------------------------------------------------------------------------------------------
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }
    //------------------------------------------------------------------------------------------------------------------


}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */