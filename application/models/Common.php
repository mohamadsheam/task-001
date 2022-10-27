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
}
