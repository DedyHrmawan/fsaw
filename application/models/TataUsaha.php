<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class TataUsaha extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAllUser(){
        $res = $this->db->get('user')->result();
        return $res;
    }
    public function getUser($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('user', $filter)->result();
        return $res;
    }
    public function insertUser($param){
        $this->db->insert('user', $param);
        return $this->db->insert_id();
    }
    public function updateUser($param){
        $this->db->where('id_user', $param['id_user'])->update('user', $param);
        return true;
    }
    public function deleteUser($param){
        $this->db->where($param)->delete('user');
        return true;
    }
    public function getAllPegawai(){
        $res = $this->db->get('pegawai')->result();
        return $res;
    }
    public function getPegawai($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('pegawai', $filter)->result();
        return $res;
    }
    public function insertPegawai($param){
        $this->db->insert('pegawai', $param);
        return $this->db->insert_id();
    }
    public function updatePegawai($param){
        $this->db->where('id_pegawai', $param['id_pegawai'])->update('pegawai', $param);
        return true;
    }
    public function deletePegawai($param){
        $this->db->where($param)->delete('pegawai');
        return true;
    }
}