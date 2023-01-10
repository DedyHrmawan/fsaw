<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TataUsahaController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('TataUsaha');
    }

	public function VPegawai()
	{
		$list = $this->TataUsaha->getAllPegawai();
		$data = array(
            'title' => 'Data Pegawai - SPK Pegawai Honorer MAN 2 Kediri',
			'list' => $list
        );	
		$this->template->tu('tu/VPegawai', $data);
	}
	public function storePegawai()
    {
        $param = $_POST;

        $this->TataUsaha->insertPegawai($param);
        redirect('pegawai');
    }    

    public function ajxGetPegawai(){
        $data['filter'] = 'id_pegawai = '.$_POST['id_pegawai'];
        echo json_encode($this->TataUsaha->getPegawai($data));
    }

    public function editPegawai(){
        $dataEdit = $_POST;
        $this->TataUsaha->updatePegawai($dataEdit);

        redirect('pegawai');
    }

    public function deletePegawai(){
        $dataDelete = $_POST;
        $this->TataUsaha->deletePegawai($dataDelete);
        redirect('pegawai');
    }

	public function VUser()
	{
		$list = $this->TataUsaha->getAllUser();
		$data = array(
            'title' => 'Data User - SPK Pegawai Honorer MAN 2 Kediri',
			'list' => $list
        );	
		$this->template->tu('tu/VUser', $data);
	}
	public function storeUser()
    {
        $param = $_POST;

        $this->TataUsaha->insertUser($param);
        redirect('user');
    }    

    public function ajxGetUser(){
        $data['filter'] = 'id_user = '.$_POST['id_user'];
        echo json_encode($this->TataUsaha->getUser($data));
    }

    public function editUser(){
        $dataEdit = $_POST;
        $this->TataUsaha->updateUser($dataEdit);

        redirect('user');
    }

    public function deleteUser(){
        $dataDelete = $_POST;
        $this->TataUsaha->deleteUser($dataDelete);
        redirect('user');
    }

	public function VDashboardTu()
	{
		$data = array(
            'title' => 'Dashboard Tata Usaha - SPK Pegawai Honorer MAN 2 Kediri'
        );	
		$this->template->tu('tu/VDashboard', $data);
	}
}
