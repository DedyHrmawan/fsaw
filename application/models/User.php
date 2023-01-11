<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $res = $this->db->get('user')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('user', $filter)->result();
        return $res;
    }
}