<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	function __construct(){
    parent::__construct();
    if ($this->session->userdata('username')==""){
  	$this->session->set_flashdata("msg", "<div class='alert alert-info alert-dismissible' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>		
			<span class='glyphicon glyphicon-remove-sign'></span> Ops.. Silahkan login terlebih dahulu!!
			</div>");
		redirect('login');
		} 
		$this->load->model('M_report');
		
  }

	public function index(){
		
		$data['side'] 			='template/side';
		$data['judul'] 			='Report';
		$data['sub_judul']	='Data Report';
		$data['content'] 		='report/v_report';
		$data['cetak'] 	= $this->M_report->cetak_data();
		$this->load->view('template/isi-halaman', $data);
		
	}

	public function cetakpdf(){
		$this->load->library('tcpdf/tcpdf.php');
		//$query=$this->db->query("SELECT pelanggan,alamat,jml_barang,tgl_terima,tgl_keluar,harga FROM pelanggan")->result();
    //print_r($query);
    $judul = 'Laporan Pelanggan';

		$pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', false);
		$pdf->SetTitle('Laporan Pelanggan');
		$pdf->SetPrintHeader(false);
		$pdf->SetPrintFooter(false);
		$pdf->SetHeaderMargin(30);
		$pdf->SetTopMargin(20);
		$pdf->SetFooterMargin(20);
		$pdf->SetAutoPageBreak(true);
		$pdf->SetAuthor('Author');
		$pdf->SetDisplayMode('real', 'default');

		$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 011', 
       PDF_HEADER_STRING);
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
		
		$pdf->AddPage();
		$query = $this->M_report->cetak_pdf();
		$pdf->Cell(0,30, $judul, 0, 2, 'C', 0,FALSE);
		$pdf->SetFont('helvetica', '', 10);



		$tbl ='<table border="1">';
		$tbl .='<tr>';
		$tbl .='<th align="center" width="50">No</th>';
		$tbl .='<th>Pelanggan</th>';
		$tbl .='<th>Alamat</th>';
		$tbl .='<th>Jumlah Barang</th>';
		$tbl .='<th align="center">Tanggal Terima</th>';
		$tbl .='<th align="center">Tanggal Terima</th>';
		$tbl .='<th align="center">Harga</th>';
		$tbl .='</tr>';

		$no=1;
		foreach($query as $row){
		$tbl .='<tr>';
		$tbl .='<td align="center">'.$no++.'</td>';
		$tbl .='<td>'.$row->pelanggan.' </td>';
		$tbl .='<td>'.$row->alamat.'</td>';
		$tbl .='<td>'.$row->jml_barang.'</td>';
		$tbl .='<td align="center">'.$row->tgl_terima.'</td>';
		$tbl .='<td align="center">'.$row->tgl_keluar.'</td>';
		$tbl .='<td align="center">'.$row->harga.'</td>';
		$tbl .='</tr>';
		}

		$tbl .='</table>';
		$pdf->writeHtml($tbl, true, false, false, false, '');
		$pdf->Output('Laporan Pelanggan.pdf', 'I');

		//$this->load->view('template/isi-halaman', $data);
	}

	public function report_pdf(){

    $data=$this->M_report->cetakpdf();
	}

}