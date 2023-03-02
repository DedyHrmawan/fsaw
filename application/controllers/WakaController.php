<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WakaController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Waka');
		$this->load->model('TataUsaha');
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('akses') != "WAKA") {
			redirect('logout');
		};
    }

	public function VDashboardWaka()
	{
        $cp = $this->TataUsaha->getTotalCP();
        $totuser = $this->TataUsaha->getTotalUser();
        $dt = $this->TataUsaha->getTotalDt();
		$data = array(
            'title' => 'Dashboard Waka Akademik - SPK Pegawai Honorer MAN 2 Kediri',
            'cp' => $cp,
            'totuser' => $totuser,
            'dt' => $dt
        );	
		$this->template->waka('waka/VDashboard', $data);
	}

	public function VPegawaiWaka()
	{
        $list = $this->Waka->getAllPegawai();
        $jenjang = $this->Waka->getKP();
        $tulis = $this->Waka->getKT();
        $wawancara = $this->Waka->getKW();
        $praktik = $this->Waka->getKPK();
        $btq = $this->Waka->getBatoq();
		$data = array(
            'title' => 'Penilaian Calon Pegawai - SPK Pegawai Honorer MAN 2 Kediri',
            'list' => $list,
            'jenjang' => $jenjang,
            'tulis' => $tulis,
            'wawancara' => $wawancara,
            'praktik' => $praktik,
            'btq' => $btq
        );	
		$this->template->waka('waka/VPenilaianPegawai', $data);
	}
    public function ajxGetNilai(){
        $data = $this->Waka->getPegawai($_POST['id_pegawai']);
        echo json_encode($data);
    }
    public function editCalon(){
        $param = $_POST;
        $data['filter'] = 'id_pegawai = '.$param['id_pegawai'];
        $cek = $this->Waka->getPenilaian($data);

        if(!empty($cek)){
            $this->Waka->updatePenilaian($param);
        }else{
            $this->Waka->insertPenilaian($param);
            $this->db->where('id_pegawai', $param['id_pegawai'])->update('pegawai', ['status' => 2]);
        }     

        $dataPenilaian  = $this->Waka->getAllPenilaian();        
        $maxmin         = $this->Waka->getMaxMin();
        $bobot          = $this->Waka->getBobot();

        foreach($dataPenilaian as $item){
            $pendidikan     = $maxmin[0]->pendidikanMax*$item->pendidikan_nilai*$bobot->bobot_pendidikan/100;
            $testulis       = $maxmin[0]->tulisMax*$item->tes_tulis*$bobot->bobot_tulis/100;
            $wawancara      = $maxmin[0]->wawancaraMax*$item->wawancara*$bobot->bobot_wawancara/100;
            $pk             = $maxmin[0]->pkMax*$item->praktik_keahlian*$bobot->bobot_praktik/100;
            $btq            = $maxmin[0]->btqMax*$item->btq*$bobot->bobot_btq/100;
            $np             = $pendidikan+$testulis+$wawancara+$pk+$btq;

            $update['id_pegawai']       = $item->id_pegawai;
            $update['na_pendidikan']    = $pendidikan;
            $update['na_testulis']      = $testulis;
            $update['na_wawancara']     = $wawancara;
            $update['na_pk']            = $pk;
            $update['na_btq']           = $btq;
            $update['nilai_preferensi'] = $np;
            $this->Waka->updatePenilaian($update);
        }   
        redirect('nilaipegawai');
    }
	public function VKriteriaPendidikan()
	{
        $list = $this->Waka->getAllPendidikan();
		$data = array(
            'title' => 'Kriteria Pendidikan - SPK Pegawai Honorer MAN 2 Kediri',
            'list' => $list
        );	
		$this->template->waka('waka/kriteria/VKriteriaPendidikan', $data);
	}
    public function storePendidikan()
    {
        $param = $_POST;

        $this->Waka->insertPendidikan($param);
        redirect('kriteria-pendidikan');
    }    

    public function ajxGetPendidikan(){
        $data['filter'] = 'id_kp = '.$_POST['id_kp'];
        echo json_encode($this->Waka->getPendidikan($data));
    }

    public function editPendidikan(){
        $dataEdit = $_POST;
        $this->Waka->updatePendidikan($dataEdit);

        redirect('kriteria-pendidikan');
    }

    public function deletePendidikan(){
        $dataDelete = $_POST;
        $this->Waka->deletePendidikan($dataDelete);
        redirect('kriteria-pendidikan');
    }

	public function VKriteriaTesTulis()
	{
        $list = $this->Waka->getAllTulis();
		$data = array(
            'title' => 'Kriteria Tes Tulis - SPK Pegawai Honorer MAN 2 Kediri',
            'list' => $list
        );	
		$this->template->waka('waka/kriteria/VKriteriaTesTulis', $data);
	}
    public function storeTulis()
    {
        $param = $_POST;

        $this->Waka->insertTulis($param);
        redirect('kriteria-testulis');
    }    

    public function ajxGetTulis(){
        $data['filter'] = 'id_ktl = '.$_POST['id_ktl'];
        echo json_encode($this->Waka->getTulis($data));
    }

    public function editTulis(){
        $dataEdit = $_POST;
        $this->Waka->updateTulis($dataEdit);

        redirect('kriteria-testulis');
    }

    public function deleteTulis(){
        $dataDelete = $_POST;
        $this->Waka->deleteTulis($dataDelete);
        redirect('kriteria-testulis');
    }

	public function VKriteriaWawancara()
	{
        $list = $this->Waka->getAllWawancara();
		$data = array(
            'title' => 'Kriteria Wawancara - SPK Pegawai Honorer MAN 2 Kediri',
            'list' => $list
        );	
		$this->template->waka('waka/kriteria/VKriteriaWawancara', $data);
	}
    public function storeWawancara()
    {
        $param = $_POST;

        $this->Waka->insertWawancara($param);
        redirect('kriteria-wawancara');
    }    

    public function ajxGetWawancara(){
        $data['filter'] = 'id_kw = '.$_POST['id_kw'];
        echo json_encode($this->Waka->getWawancara($data));
    }

    public function editWawancara(){
        $dataEdit = $_POST;
        $this->Waka->updateWawancara($dataEdit);

        redirect('kriteria-wawancara');
    }

    public function deleteWawancara(){
        $dataDelete = $_POST;
        $this->Waka->deleteWawancara($dataDelete);
        redirect('kriteria-wawancara');
    }

	public function VKriteriaPraktik()
	{
        $list = $this->Waka->getAllPraktik();
		$data = array(
            'title' => 'Kriteria Praktik - SPK Pegawai Honorer MAN 2 Kediri',
            'list' => $list
        );	
		$this->template->waka('waka/kriteria/VKriteriaPraktik', $data);
	}
    public function storePraktik()
    {
        $param = $_POST;

        $this->Waka->insertPraktik($param);
        redirect('kriteria-praktik');
    }    

    public function ajxGetPraktik(){
        $data['filter'] = 'id_pk = '.$_POST['id_pk'];
        echo json_encode($this->Waka->getPraktik($data));
    }

    public function editPraktik(){
        $dataEdit = $_POST;
        $this->Waka->updatePraktik($dataEdit);

        redirect('kriteria-praktik');
    }

    public function deletePraktik(){
        $dataDelete = $_POST;
        $this->Waka->deletePraktik($dataDelete);
        redirect('kriteria-praktik');
    }

	public function VKriteriaBtq()
	{
        $list = $this->Waka->getAllBtq();
		$data = array(
            'title' => 'Kriteria Kemampuan BTQ - SPK Pegawai Honorer MAN 2 Kediri',
            'list' => $list
        );	
		$this->template->waka('waka/kriteria/VKriteriaBtq', $data);
	}
    public function storeBtq()
    {
        $param = $_POST;

        $this->Waka->insertBtq($param);
        redirect('kriteria-btq');
    }    

    public function ajxGetBtq(){
        $data['filter'] = 'id_btq = '.$_POST['id_btq'];
        echo json_encode($this->Waka->getBtq($data));
    }

    public function editBtq(){
        $dataEdit = $_POST;
        $this->Waka->updateBtq($dataEdit);

        redirect('kriteria-btq');
    }

    public function deleteBtq(){
        $dataDelete = $_POST;
        $this->Waka->deleteBtq($dataDelete);
        redirect('kriteria-btq');
    }

	public function VPerangkingan()
	{
        $list       = $this->Waka->getAllPegawaiRank();
        $maxmin     = $this->Waka->getMaxMin();
        $ranking    = $this->Waka->getPerankingan();
        $bobot      = $this->Waka->getBobot();
		$data = array(
            'title' => 'Perhitungan Perangkingan - SPK Pegawai Honorer MAN 2 Kediri',
            'list' => $list,
            'maxmin' => $maxmin,
            'rank' => $ranking,
            'bobot' => $bobot
        );	
		$this->template->waka('waka/VPerangkingan', $data);
	}
    public function simpanbobot(){
        $data = $_POST;
        $this->Waka->updateBobot($data);

        $dataPenilaian  = $this->Waka->getAllPenilaian();        
        $maxmin         = $this->Waka->getMaxMin();
        $bobot          = $this->Waka->getBobot();

        foreach($dataPenilaian as $item){
            $pendidikan     = $maxmin[0]->pendidikanMax*$item->pendidikan_nilai*$bobot->bobot_pendidikan/100;
            $testulis       = $maxmin[0]->tulisMax*$item->tes_tulis*$bobot->bobot_tulis/100;
            $wawancara      = $maxmin[0]->wawancaraMax*$item->wawancara*$bobot->bobot_wawancara/100;
            $pk             = $maxmin[0]->pkMax*$item->praktik_keahlian*$bobot->bobot_praktik/100;
            $btq            = $maxmin[0]->btqMax*$item->btq*$bobot->bobot_btq/100;
            $np             = $pendidikan+$testulis+$wawancara+$pk+$btq;

            $update['id_pegawai']       = $item->id_pegawai;
            $update['na_pendidikan']    = $pendidikan;
            $update['na_testulis']      = $testulis;
            $update['na_wawancara']     = $wawancara;
            $update['na_pk']            = $pk;
            $update['na_btq']           = $btq;
            $update['nilai_preferensi'] = $np;
            $this->Waka->updatePenilaian($update);
        }

        redirect('perangkingan');
    }

    public function downloadPdf()
    {
        $this->load->library('Pdf');
        $this->load->library('table');
            
        $printed=date_create();
        $printed = date_format($printed,"d F Y");
		
		$pdf = new Pdf('P', PDF_UNIT, 'A4', true, 'UTF-8', false);
		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('wichtig');
		$pdf->SetTitle('Hasil Perankingan');
		$pdf->SetSubject('-');
		$pdf->SetKeywords('Laporan, Wichtig, PDF');

		// set default header data
		//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

		// set header and footer fonts
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		// set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		// set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		// set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		// set font
		$pdf->SetFont('times', '', 12);
		
		// ---------------------------------------------------------
        $dataString = "";      
        $ranking = $this->Waka->getPerankingan();        
        $bobot   = $this->Waka->getBobot();
        $no = 1;
        foreach($ranking as $item){
            
            $dataString = $dataString."
            <tr>
                <td>$no</td>
                <td>$item->nama_lengkap</td>
                <td>$item->na_pendidikan</td>
                <td>$item->na_testulis</td>
                <td>$item->na_wawancara</td>
                <td>$item->na_pk</td>
                <td>$item->na_btq</td>
                
                <td>$item->nilai_preferensi</td>
            </tr>";  
            $no++;
        };
		
        $html = <<<EOD
            <style>
                table {
                    width: 500px;
                }
                th, td {
                    border: 1px solid grey;
                    border-collapse: collapse;
                    padding: 5px;
                }
            </style>
            <h1>Hasil Perankingan</h1>
            <table cellspacing="0" cellpadding="5" style="widht:100%;">
                <thead>
                    <tr class="text-center align-top">
                        <th rowspan="4">Rank</th>
                        <th rowspan="4">Nama Lengkap</th>
                        <th colspan="5">Kriteria</th>
                        <th rowspan="4" colspan="0">Nilai Preferensi</th>
                    </tr>
                    <tr class="text-center">
                        <th>Benefit</th>
                        <th>Benefit</th>
                        <th>Benefit</th>
                        <th>Benefit</th>
                        <th class="border">Benefit</th> 
                    </tr>
                    <tr class="text-center">
                        <th>$bobot->bobot_pendidikan%</th>
                        <th>$bobot->bobot_tulis%</th>
                        <th>$bobot->bobot_wawancara%</th>
                        <th>$bobot->bobot_praktik%</th>
                        <th class="border">$bobot->bobot_btq%</th>
                    </tr>
                    <tr class="text-center">
                        <th>Jenjang Pendidikan</th>
                        <th>Nilai Tes tulis sesuai bidang</th>
                        <th>Nilai Wawancara</th>
                        <th>Nilai Praktik keahlian</th>
                        <th class="border">Kemampuan BTQ</th>
                    </tr>
                </thead>
                <tbody>
                    $dataString
                </tbody>
            </table>
            EOD;

		// add a page
		$pdf->AddPage('P');
		
		// output the HTML content
		$pdf->writeHTML($html, true, false, true, false, '');
		
		// reset pointer to the last page
		$pdf->lastPage();

		//Close and output PDF document
		$pdf->Output('hasil_perankingan'.md5(time()) . '.pdf', 'D');
    }
}
