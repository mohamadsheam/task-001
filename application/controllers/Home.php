<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construnct()
    {
        parent :: __construct();
    }

    public function dashboard()
    {
        $this->load->view('includes/header');
        $this->load->view('home/dashboard');
        $this->load->view('includes/footer');
    }

}
