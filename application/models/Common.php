<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends CI_Model {

    function __construct(){
        parent::__construct();
    }


    /**
     * Read speclific columns from database table
     * @param  string $cols                [table column name separated by comma]
     * @param  string $table               table name
     * @param  array $where               condition
     * @return object dataset
     */
    public function readCols($cols, $table, $where){
        $this->db->select($cols);
        $this->db->where($where);
        $query = $this->db->get($table);

        return $query->result();
    }


    /**
     * Building the queries
     * @param  array $postData data table params
     * @return object dataset     [
     */
    public function datatables_query($postData)
    {
        $this->db->from('currency_informations');

        $columns = ['name', 'num_code', 'char_code', 'nominal', 'value'];
        if($postData['search']['value']){
            $like_ar = [];

            foreach ($columns as $c) {
               $like_ar[$c] = $postData['search']['value'];
            }

            $this->db->or_like($like_ar);
        }

        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }

        if(isset($postData['order'])){
            $this->db->order_by($columns[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }

        $query = $this->db->get();
        return $query->result();
    }


}
