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


    public function fetch_data()
    {
        $totalData = $this->Common->readCols('id', 'currency_informations',[]);

        // receive params
        $postData = $this->input->post();

        $records = $this->Common->datatables_query($postData);
        //print_r($this->db->last_query());


        $data = array();
        foreach ($records as $key => $r) {
            $temp = array(
                'sn'        => $key+1,
                'name'      => $r->name,
                'num_code'  => $r->num_code,
                'char_code' => $r->char_code,
                'nominal'   => $r->nominal,
                'value'     => number_format($r->value),
            );
            array_push($data, $temp);
        }


        $response = array(
            "draw" => intval($postData['draw']),
            "iTotalRecords" => count($totalData),
            "iTotalDisplayRecords" => count($records),
            "aaData" => $data
        );

        echo json_encode($response);


    }


    public function update_data(){
        // make a curl request
        $url = "https://www.cbr.ru/scripts/XML_daily.asp?date_req=02/09/2002";
        //$url = "https://www.cbr.ru/scripts/XML_daily.asp";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);


        $xml = simplexml_load_string($response);
        $json = json_encode($xml);
        $response_array = json_decode($json,TRUE);

       $currenciesData = $response_array['Valute'];


        // insert to db
        foreach ($currenciesData as $key => $r) {
            $data = array(
                'num_code'  => $r['NumCode'],
                'char_code' => $r['CharCode'],
                'nominal'   => $r['Nominal'],
                'name'      => $r['Name'],
                'value'     => (float) str_replace(',', '', $r['Value']) ,
            );

            // check already exist or not
            $where = ['num_code' => $r['NumCode']];
            $existCheck = $this->Common->readCols('id', 'currency_informations', $where);

            if($existCheck){ // update if exist already
                $this->db->update('currency_informations', $data, $where);
            }else{
                $this->db->insert('currency_informations', $data);
            }

        }

        echo "1";
        return TRUE;
    }
}
