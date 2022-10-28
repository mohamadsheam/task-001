<?php

require APPPATH . 'libraries/REST_Controller.php';

class Api extends REST_Controller {

    protected $_staic_auth_key;

    public function __construct() {
       parent::__construct();
       $this->load->database();
       header("Access-Control-Allow-Methods: GET");

       // Load models
        $this->load->model('Common');

        // set staic_auth_key
        $this->_staic_auth_key = 'mohammadsheam@bdgrowtech.com';


    }

    // for handling unkownmethod call
    public function __call($name, $arguments){}


    public function fetchCurrencyInfo_get(){

        $currency_code = null;
        $auth_key = null;

        // receive params
        $currency_code = $this->get('currency_code');
        $auth_key = $this->get('auth_key');

        if($currency_code == null && $auth_key == null){
            $data = [
                'message' => 'Sorry,currency code and auth key are required.'
            ];

            $this->_save_log_request(REST_Controller::HTTP_BAD_REQUEST, 'few args have passed');

            $this->response($data, REST_Controller::HTTP_BAD_REQUEST);

        }else{

            // check the auth key
            if($this->_staic_auth_key != $auth_key){
                $data = [
                    'message' => 'Sorry, The Auth key is not matched.'
                ];

                $this->_save_log_request(REST_Controller::HTTP_BAD_REQUEST, 'Auth key is not matched');

                $this->response($data, REST_Controller::HTTP_BAD_REQUEST);
            }else{
                // read info from the database
                $record =  $this->Common->readCols('*', 'currency_informations',['char_code' => $currency_code]);

                if(!$record){

                    $data = [
                        'message' => 'Sorry, No record is found by this code.'
                    ];

                    $this->_save_log_request(REST_Controller::HTTP_OK, 'currency_code is not found in the db');

                    $this->response($data, REST_Controller::HTTP_OK);

                }else{

                    $data['info'] = $record;

                    $this->_save_log_request(REST_Controller::HTTP_OK, 'success');

                    $this->response($data, REST_Controller::HTTP_OK);
                }

            }

        }

    }



    /**
     * Add the request to the log table
     *
     * @access protected
     * @param number $http_code response status code
     * @param string $comments by default empty
     * @return bool TRUE the data was inserted; otherwise, FALSE
     */
    protected function _save_log_request($http_code, $comments='')
    {
        // Insert the request into the log table
        $is_inserted = $this->rest->db
            ->insert(
                'log_table', [

                'request_ip' => $this->input->ip_address(),
                'comments' => $comments,
                'status' => $http_code
            ]);


        return $is_inserted;
    }


}
