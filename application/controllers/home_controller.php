<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct(){
    parent::construct();
}

    public function index()
    {
        $this->load->view('head_view');
        $this->load->view('home_view');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */