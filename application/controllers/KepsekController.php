<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KepsekController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Waka');
		$this->load->model('TataUsaha');
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('akses') != "KEPSEK") {
			redirect('logout');
		};
    }

	public function VDashboardKepsek()
	{
        $cp = $this->TataUsaha->getTotalCP();
        $totuser = $this->TataUsaha->getTotalUser();
        $dt = $this->TataUsaha->getTotalDt();
		$data = array(
            'title' => 'Dashboard Kepala Sekolah - SPK Pegawai Honorer MAN 2 Kediri',
            'cp' => $cp,
            'totuser' => $totuser,
            'dt' => $dt
        );	
		$this->template->kepsek('kepsek/VDashboard', $data);
	}

	public function VRanking()
	{
        $list       = $this->Waka->getAllPegawaiRank();
        $maxmin     = $this->Waka->getMaxMin();
        $ranking    = $this->Waka->getPerankingan();
		$data = array(
            'title' => 'Hasil Perangkingan - SPK Pegawai Honorer MAN 2 Kediri',
            'list' => $list,
            'maxmin' => $maxmin,
            'rank' => $ranking
        );	
		$this->template->kepsek('kepsek/VRanking', $data);
	}

	public function VPenentuan()
	{
        $list = $this->Waka->getAllPegawaiPenentuan();
		$data = array(
            'title' => 'Penentuan Pegawai Honorer - SPK Pegawai Honorer MAN 2 Kediri',
            'list' => $list
        );	
		$this->template->kepsek('kepsek/VPenentuan', $data);
	}
    public function terima(){
        $data = $_POST;
        $this->Waka->updatePegawai($data);

        redirect('penentuan');
    }
    public function ajxGetPegawai(){
        $data['filter'] = 'id_pegawai = '.$_POST['id_pegawai'];
        echo json_encode($this->TataUsaha->getPegawai($data));
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
                        <th>20%</th>
                        <th>20%</th>
                        <th>20%</th>
                        <th>20%</th>
                        <th class="border">20%</th>
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

    public function downloadPenentuan()
    {
        $this->load->library('Pdf');
        $this->load->library('table');
            
        $printed=date_create();
        $printed = date_format($printed,"d F Y");
		
		$pdf = new Pdf('P', PDF_UNIT, 'A4', true, 'UTF-8', false);
		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('wichtig');
		$pdf->SetTitle('Status Calon Pegawai Honorer');
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
        $list = $this->Waka->getAllPegawaiPenentuan();
        $no = 1;
        foreach($list as $item){
            $status = '';
            if($item->status_pegawai == 1){
                $status = 'Belum Diterima';
            }else if($item->status_pegawai == 2){
                $status = 'Diterima';
            }
            $dataString = $dataString."     
                <tr>
                    <td>$no</td>
                    <td>$item->nama_lengkap</td>
                    <td>$item->nilai_preferensi</td>
                    <td>$status</td>
                </tr>            
            ";  
            $no++;
        };
		
        $html = <<<EOD
            <style>
                table {
                    width: 600px;
                }
                th, td {
                    border: 1px solid grey;
                    border-collapse: collapse;
                    padding: 5px;
                }
            </style>
            <h1>Status Calon Pegawai Honorer</h1>
            <table cellspacing="0" cellpadding="5" style="widht:100%;">
                <thead>
                    <tr class="text-center align-top">
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Nilai Preferensi</th>
                        <th>Status</th>
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
		$pdf->Output('calon_pegawai_'.md5(time()) . '.pdf', 'D');
    }
}
