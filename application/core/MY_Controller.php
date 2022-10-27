<?php


/**
 * Make a custom controller to load CI_Controller
 */
class MY_Controller extends CI_Controller
{
    public $data = array(); // define a global array

    function __construct()
    {
         parent :: __construct();

         // Load libraries
        $this->load->library(['form_validation', 'session']);

        // Load models
        $this->load->model('Common');

        // Login check
        $exception_uris = array(
            'Auth/login',
        );
        if(in_array(uri_string(), $exception_uris) == FALSE) {
            if($this->session->userdata('loggedIn') != true) {
                //redirect('Auth/login', 'refresh');
            }
        }
    }
}
