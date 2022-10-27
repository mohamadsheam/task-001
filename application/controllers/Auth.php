<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	function __construct()
    {
        parent::__construct();
    }

	public function login(){

		$this->data['errors']= 0;

		if($this->input->post('submit')){
			$post = $this->input->post();
			$pass = password_hash($post['password'], PASSWORD_DEFAULT);

			// read password and match with input data
			$where = array('username' => trim($post['username']));
			$result = $this->Common->readCols('id,password', 'users', $where);

			if(!$result){
				$this->data['errors']= 1;
			}else{

				if(password_verify($post['password'], $result[0]->password) == FALSE){
		           $this->data['errors']= 1;
		        }else{
		        	// success
		        	$status = $this->save_activity($result);

		        	if($status){ // enable session
		        		$data = array(
    		                'loggedIn'  => true,
    		                'user_id'   => $result[0]->id,
    		            );

    		            $this->session->set_userdata($data);
		        		redirect('Home/dashboard','refresh');
		        	}

		        }
			}

		}

		$this->load->view('auth/login', $this->data);
	}


	/**
	 * save user login activity
	 * @param  [type] $user_info stdClass object
	 * @return boolean           TRUE/FALSE
	 */
	private function save_activity($user_info){
		// save data to database table
		$ip = get_client_ip();
        $os = getOS();
        $browser = getBrowser();
        $device = getDevice();

        $data = array(
            'date'       => date('Y-m-d'),
            'user_id'   => $user_info[0]->id,
            'browser'    => $browser,
            'os'         => $os,
            'ip'         => $ip,
            'device'     => $device,
            'login_time' => date('Y-m-d H:i:s'),
        );

		$status = $this->db->insert('access_info', $data);

		return $status;

	}


	/**
	 * Logout user and save info
	 * @return [type] [description]
	 */
	public function logout() {

		$where = array(
            'user_id'    => $this->session->userdata('user_id'),
        );

        $this->db->set(array('logout_time' => date('Y-m-d H:i:s ')));
        $this->db->where($where);
        $this->db->update("access_info");

        $this->session->sess_destroy();
        redirect('Auth/login', 'refresh');
    }

}
