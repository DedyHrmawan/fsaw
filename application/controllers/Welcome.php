<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
	
    }

	public function index()
	{
		$data = array(
            'title' => 'Login - SPK Pegawai Honorer MAN 2 Kediri'
        );	
		$this->load->view('VLogin', $data);
	}

	// TATA USAHA 

	public function VPegawai()
	{
		$data = array(
            'title' => 'Data Pegawai - SPK Pegawai Honorer MAN 2 Kediri'
        );	
		$this->template->tu('tu/VPegawai', $data);
	}

	public function VUser()
	{
		$data = array(
            'title' => 'Data User - SPK Pegawai Honorer MAN 2 Kediri'
        );	
		$this->template->tu('tu/VUser', $data);
	}

	public function VDashboardTu()
	{
		$data = array(
            'title' => 'Dashboard Tata Usaha - SPK Pegawai Honorer MAN 2 Kediri'
        );	
		$this->template->tu('tu/VDashboard', $data);
	}

	// Waka Akademik 
	public function VDashboardWaka()
	{
		$data = array(
            'title' => 'Dashboard Waka Akademik - SPK Pegawai Honorer MAN 2 Kediri'
        );	
		$this->template->waka('waka/VDashboard', $data);
	}

	public function VPegawaiWaka()
	{
		$data = array(
            'title' => 'Penilaian Calon Pegawai - SPK Pegawai Honorer MAN 2 Kediri'
        );	
		$this->template->waka('waka/VPenilaianPegawai', $data);
	}
	public function VKriteriaPendidikan()
	{
		$data = array(
            'title' => 'Kriteria Pendidikan - SPK Pegawai Honorer MAN 2 Kediri'
        );	
		$this->template->waka('waka/kriteria/VKriteriaPendidikan', $data);
	}

	public function VKriteriaTesTulis()
	{
		$data = array(
            'title' => 'Kriteria Tes Tulis - SPK Pegawai Honorer MAN 2 Kediri'
        );	
		$this->template->waka('waka/kriteria/VKriteriaTesTulis', $data);
	}

	public function VKriteriaWawancara()
	{
		$data = array(
            'title' => 'Kriteria Wawancara - SPK Pegawai Honorer MAN 2 Kediri'
        );	
		$this->template->waka('waka/kriteria/VKriteriaWawancara', $data);
	}

	public function VKriteriaPraktik()
	{
		$data = array(
            'title' => 'Kriteria Praktik - SPK Pegawai Honorer MAN 2 Kediri'
        );	
		$this->template->waka('waka/kriteria/VKriteriaPraktik', $data);
	}

	public function VKriteriaBtq()
	{
		$data = array(
            'title' => 'Kriteria Kemampuan BTQ - SPK Pegawai Honorer MAN 2 Kediri'
        );	
		$this->template->waka('waka/kriteria/VKriteriaBtq', $data);
	}

	public function VPerangkingan()
	{
		$data = array(
            'title' => 'Perhitungan Perangkingan - SPK Pegawai Honorer MAN 2 Kediri'
        );	
		$this->template->waka('waka/VPerangkingan', $data);
	}

	// KEPSEK 
	public function VDashboardKepsek()
	{
		$data = array(
            'title' => 'Dashboard Kepala Sekolah - SPK Pegawai Honorer MAN 2 Kediri'
        );	
		$this->template->kepsek('kepsek/VDashboard', $data);
	}

	public function VRanking()
	{
		$data = array(
            'title' => 'Hasil Perangkingan - SPK Pegawai Honorer MAN 2 Kediri'
        );	
		$this->template->kepsek('kepsek/VRanking', $data);
	}

	public function VPenentuan()
	{
		$data = array(
            'title' => 'Penentuan Pegawai Honorer - SPK Pegawai Honorer MAN 2 Kediri'
        );	
		$this->template->kepsek('kepsek/VPenentuan', $data);
	}
}
