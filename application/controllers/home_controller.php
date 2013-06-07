<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_controller extends CI_Controller {

    function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('home_model');
}

    public function index()
    {
        $provincias = $this->home_model->getProvincias();

        $this->load->view('head_view');
        $this->load->view('home_view',$provincias);

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */