<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Waka extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    //KP
    public function getAllPendidikan(){
        $res = $this->db->get('kriteria_pendidikan')->result();
        return $res;
    }
    public function getPendidikan($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('kriteria_pendidikan', $filter)->result();
        return $res;
    }
    public function insertPendidikan($param){
        $this->db->insert('kriteria_pendidikan', $param);
        return $this->db->insert_id();
    }
    public function updatePendidikan($param){
        $this->db->where('id_kp', $param['id_kp'])->update('kriteria_pendidikan', $param);
        return true;
    }
    public function deletePendidikan($param){
        $this->db->where($param)->delete('kriteria_pendidikan');
        return true;
    }
    //Tes Tulis
    public function getAllTulis(){
        $res = $this->db->get('kriteria_tes_tulis')->result();
        return $res;
    }
    public function getTulis($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('kriteria_tes_tulis', $filter)->result();
        return $res;
    }
    public function insertTulis($param){
        $this->db->insert('kriteria_tes_tulis', $param);
        return $this->db->insert_id();
    }
    public function updateTulis($param){
        $this->db->where('id_ktl', $param['id_ktl'])->update('kriteria_tes_tulis', $param);
        return true;
    }
    public function deleteTulis($param){
        $this->db->where($param)->delete('kriteria_tes_tulis');
        return true;
    }
    
    //Wawancara
    public function getAllWawancara(){
        $res = $this->db->get('kriteria_wawancara')->result();
        return $res;
    }
    public function getWawancara($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('kriteria_wawancara', $filter)->result();
        return $res;
    }
    public function insertWawancara($param){
        $this->db->insert('kriteria_wawancara', $param);
        return $this->db->insert_id();
    }
    public function updateWawancara($param){
        $this->db->where('id_kw', $param['id_kw'])->update('kriteria_wawancara', $param);
        return true;
    }
    public function deleteWawancara($param){
        $this->db->where($param)->delete('kriteria_wawancara');
        return true;
    }

    //Praktik
    public function getAllPraktik(){
        $res = $this->db->get('kriteria_praktik_keahlian')->result();
        return $res;
    }
    public function getPraktik($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('kriteria_praktik_keahlian', $filter)->result();
        return $res;
    }
    public function insertPraktik($param){
        $this->db->insert('kriteria_praktik_keahlian', $param);
        return $this->db->insert_id();
    }
    public function updatePraktik($param){
        $this->db->where('id_pk', $param['id_pk'])->update('kriteria_praktik_keahlian', $param);
        return true;
    }
    public function deletePraktik($param){
        $this->db->where($param)->delete('kriteria_praktik_keahlian');
        return true;
    }
    //BTQ
    public function getAllBtq(){
        $res = $this->db->get('kriteria_btq')->result();
        return $res;
    }
    public function getBtq($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('kriteria_btq', $filter)->result();
        return $res;
    }
    public function insertBtq($param){
        $this->db->insert('kriteria_btq', $param);
        return $this->db->insert_id();
    }
    public function updateBtq($param){
        $this->db->where('id_btq', $param['id_btq'])->update('kriteria_btq', $param);
        return true;
    }
    public function deleteBtq($param){
        $this->db->where($param)->delete('kriteria_btq');
        return true;
    }
    public function getAllPegawai(){
        $sql = "SELECT p.*,s.id_penilaian,s.pendidikan_nilai,s.tes_tulis,s.wawancara,s.praktik_keahlian,s.btq FROM pegawai p LEFT JOIN penilaian_pegawai s ON p.id_pegawai = s.id_pegawai";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getPegawai($param){
        $sql = "SELECT p.*,s.id_penilaian,s.pendidikan_nilai,s.tes_tulis,s.wawancara,s.praktik_keahlian,s.btq FROM pegawai p LEFT JOIN penilaian_pegawai s ON p.id_pegawai = s.id_pegawai WHERE p.id_pegawai = '$param'";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getKP(){
        $res = $this->db->get('kriteria_pendidikan')->result();
        return $res;
    }
    public function getKT(){
        $res = $this->db->get('kriteria_tes_tulis')->result();
        return $res;
    }
    public function getKW(){
        $res = $this->db->get('kriteria_wawancara')->result();
        return $res;
    }
    public function getKPK(){
        $res = $this->db->get('kriteria_praktik_keahlian')->result();
        return $res;
    }
    public function getBatoq(){
        $res = $this->db->get('kriteria_btq')->result();
        return $res;
    }
    public function getPenilaian($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('penilaian_pegawai', $filter)->result();
        return $res;
    }
    public function insertPenilaian($param){
        $this->db->insert('penilaian_pegawai', $param);
        return $this->db->insert_id();
    }
    public function updatePenilaian($param){
        $this->db->where('id_pegawai', $param['id_pegawai'])->update('penilaian_pegawai', $param);
        return true;
    }
    public function updatePegawai($param){
        $this->db->where('id_pegawai', $param['id_pegawai'])->update('pegawai', $param);
        return true;
    }
    public function getAllPegawaiRank(){
        $sql = "SELECT p.*,s.id_penilaian,s.pendidikan_nilai,s.tes_tulis,s.wawancara,s.praktik_keahlian,s.btq FROM pegawai p LEFT JOIN penilaian_pegawai s ON p.id_pegawai = s.id_pegawai WHERE p.status = 2";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getAllPegawaiPenentuan(){
        $sql = "SELECT p.*,s.id_penilaian,s.pendidikan_nilai,s.tes_tulis,s.wawancara,s.praktik_keahlian,s.btq,s.na_pendidikan,s.na_testulis,s.na_wawancara,s.na_pk,s.na_btq,s.nilai_preferensi FROM pegawai p LEFT JOIN penilaian_pegawai s ON p.id_pegawai = s.id_pegawai WHERE p.status = 2 ORDER BY s.nilai_preferensi DESC, p.nama_lengkap ASC";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getPerankingan(){
        $sql = "SELECT p.*,s.id_penilaian,s.pendidikan_nilai,s.tes_tulis,s.wawancara,s.praktik_keahlian,s.btq,s.na_pendidikan,s.na_testulis,s.na_wawancara,s.na_pk,s.na_btq,s.nilai_preferensi FROM pegawai p LEFT JOIN penilaian_pegawai s ON p.id_pegawai = s.id_pegawai WHERE p.status = 2 ORDER BY s.nilai_preferensi DESC, p.nama_lengkap ASC";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getAllPenilaian(){
        $res = $this->db->get('penilaian_pegawai')->result();
        return $res;
    }
    public function getMaxMin(){
        $sql = "SELECT 
        MAX(pendidikan_nilai) AS pendidikanMax, MIN(pendidikan_nilai) AS pendidikanMin, 
        MAX(tes_tulis) AS tulisMax, MIN(tes_tulis) AS tulisMin, 
        MAX(wawancara) AS wawancaraMax, MIN(wawancara) AS wawancaraMin, 
        MAX(praktik_keahlian) AS pkMax, MIN(praktik_keahlian) AS pkMin, 
        MAX(btq) AS btqMax, MIN(btq) AS btqMin 
        FROM penilaian_pegawai";
        $res = $this->db->query($sql)->result();
        return $res;
    }
}