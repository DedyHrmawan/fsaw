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
    public function getTotalCP(){
        $sql = "SELECT COUNT(id_pegawai) as TOTAL FROM pegawai";
        $res = $this->db->query($sql)->result();
        return $res; 
    }
    public function getTotalUser(){
        $sql = "SELECT COUNT(id_user) as TOTAL FROM user";
        $res = $this->db->query($sql)->result();
        return $res; 
    }
    public function getTotalRekom(){
        $sql = "SELECT COUNT(pe.id_pegawai) as TOTAL FROM pegawai pe, penilaian_pegawai pn WHERE pe.id_pegawai = pn.id_pegawai AND nilai_preferensi >= 0.8";
        $res = $this->db->query($sql)->result();
        return $res; 
    }
    public function getTotalDt(){
        $sql = "SELECT COUNT(id_pegawai) as TOTAL FROM pegawai WHERE status_pegawai=2";
        $res = $this->db->query($sql)->result();
        return $res; 
    }
}