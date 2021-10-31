<?php
 if ( ! defined('BASEPATH')) exit(header('Location:../'));
class laporanagenda extends CI_controller
{
	  function __construct()
	  {
		   parent:: __construct();
		   // error_reporting(0);
			if($this->session->userdata('admin') != TRUE){
			  redirect(base_url(''));
			  //exit;
			};
		   $this->load->model('m_admin');
		   $this->load->model('m_laporan');
		   $this->load->model('m_laporanagenda');
	  }
	  
	public function cetak_laporan_agenda($dari='',$sampai='')
	{
	  $data=$this->m_laporan->agenda($dari,$sampai);
	  
	    $im=0;
		foreach($data->result_array() as $dataman)
		{
		   $idman=$dataman['id_agenda'];
		   $idpegawaiman=$dataman['id_pegawai'];
		   $idpejabatman=$dataman['id_pejabat'];
		   

		   $querypegawai = $this->db->query("SELECT * FROM pegawai WHERE id_pegawai='$idpegawaiman' ");
		   $datacount[$im]['pegawai']=$querypegawai->result_array();

		   $querypejabat = $this->db->query("SELECT * FROM pegawai WHERE id_pegawai='$idpejabatman' ");
		   $datacount[$im]['pejabat']=$querypejabat->result_array();
		   
		   $im++;
		}

	   $x=array(
			 'judul'=>'Laporan Agenda Kegiatan',
			 'datacount' => $datacount,
			 'data'=>$this->m_laporan->agenda($dari,$sampai),
			 'depan'=>FALSE,
			 'cetak'=>FALSE);
	 
 	   
      $this->load->view('laporanagenda/agenda',$x);           	
	}
	
	/*
	public function cetak_laporan_agendapegawai($dari='',$sampai='',$nip='')
	{
	  $x = array(
               'cetak'=>FALSE,
               'depan'=>FALSE,
		       'data' => $this->m_laporan->agenda2($dari,$sampai,$nip),
			   'data2' => $this->m_laporan->agenda3($dari,$sampai,$nip),
               'judul'=> 'Data Agenda');
      $this->load->view('laporanagenda/agendapegawai',$x);           	
	}
	*/


    public function cetak_laporan_agendapegawai($dari='',$sampai='',$nip='')
	{ 
		$data=$this->m_laporan->agenda2($dari,$sampai,$nip);
		$data2=$this->m_laporan->agenda3($dari,$sampai,$nip);
				
	    $im=0;
		foreach($data->result_array() as $dataman)
		{
		   $idman=$dataman['id_agenda'];
		   $idpegawaiman=$dataman['id_pegawai'];
		   $idpejabatman=$dataman['id_pejabat'];
		   
		   

		   $querypegawai = $this->db->query("SELECT * FROM pegawai WHERE id_pegawai='$idpegawaiman' ");
		   $datacount[$im]['pegawai']=$querypegawai->result_array();

		   $querypejabat = $this->db->query("SELECT * FROM pegawai WHERE id_pegawai='$idpejabatman' ");
		   $datacount[$im]['pejabat']=$querypejabat->result_array();
		   
		   $im++;
		}
		
		foreach($data2->result_array() as $dataman)
		{
		   $idman=$dataman['id_agenda'];
		   $idpegawaiman=$dataman['id_pegawai'];
		   $idpejabatman=$dataman['id_pejabat'];
		   
		   
		   $querypegawai = $this->db->query("SELECT * FROM pegawai WHERE id_pegawai='$idpegawaiman' ");
		   $datacount[$im]['pegawai']=$querypegawai->result_array();

		   $querypejabat = $this->db->query("SELECT * FROM pegawai WHERE id_pegawai='$idpejabatman' ");
		   $datacount[$im]['pejabat']=$querypejabat->result_array();
		   
		   $im++;
		}
	
	  $x = array(
               'cetak'=>FALSE,
               'depan'=>FALSE,
			   'datacount'=>$datacount,
		       'data' => $this->m_laporan->agenda2($dari,$sampai,$nip),
			   'data2' => $this->m_laporan->agenda3($dari,$sampai,$nip),
               'judul'=> 'Laporan Agenda Per Pegawai');
      $this->load->view('laporanagenda/agendapegawai',$x);           	
	}


	

	 	
	  public function laporan_agenda($value='')
	  {
			if (isset($_POST['cari'])) 
			{
			 //cek data apabila berhasi Di kirim maka postdata akan melakukan cek .... dan sebaliknya
			 $dari=$this->input->post('dari');
			 $sampai=$this->input->post('sampai');
			 
			    $data=$this->m_laporan->agenda($dari,$sampai);
			    
				$im=0;
				foreach($data->result_array() as $dataman)
				{
				   $idman=$dataman['id_agenda'];
				   $idpegawaiman=$dataman['id_pegawai'];
				   $idpejabatman=$dataman['id_pejabat'];
				   

				   $querypegawai = $this->db->query("SELECT * FROM pegawai WHERE id_pegawai='$idpegawaiman' ");
				   $datacount[$im]['pegawai']=$querypegawai->result_array();

				   $querypejabat = $this->db->query("SELECT * FROM pegawai WHERE id_pegawai='$idpejabatman' ");
				   $datacount[$im]['pejabat']=$querypejabat->result_array();
				   
				   $im++;
				}
	
			   $x=array(
					 'judul'=>'Laporan Agenda Kegiatan',
					 'datacount' => $datacount,
					 'data'=>$this->m_laporan->agenda($dari,$sampai),
					 'depan'=>FALSE,
					 'cetak'=>TRUE);
					 
				$pesan='<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-check"></i> Hasil Laporan!</h4>
					   Data Laporan Agenda Kegiatan Terhitung Dari.'.tgl_indonesia($this->input->post('dari')).' Sampai Dengan '.tgl_indonesia($this->input->post('sampai')).'
					  </div>';
				$this->session->set_flashdata('pesan',$pesan); 
				tpl('laporanagenda/agenda',$x);
			}
			else
			{

				$x = array('judul' =>'Laporan Agenda Kegiatan',
					   'depan'=>TRUE,
					   'cetak'=>FALSE);	
				tpl('laporanagenda/agenda',$x);
			}
	  }
	  
	  
	  public function laporan_agendapegawai($value='')
	  {
			if (isset($_POST['cari'])) 
			{
			 //cek data apabila berhasi Di kirim maka postdata akan melakukan cek .... dan sebaliknya
			 $dari=$this->input->post('dari');
			 $sampai=$this->input->post('sampai');
			 $nip=$this->input->post('nip');
				
				$datacount=array();
			    $data=$this->m_laporan->agenda2($dari,$sampai,$nip);
				$data2=$this->m_laporan->agenda3($dari,$sampai,$nip);
			    
				$im=0;
				foreach($data->result_array() as $dataman)
				{
				   $idman=$dataman['id_agenda'];
				   $idpegawaiman=$dataman['id_pegawai'];
				   $idpejabatman=$dataman['id_pejabat'];
				   
				   

				   $querypegawai = $this->db->query("SELECT * FROM pegawai WHERE id_pegawai='$idpegawaiman' ");
				   $datacount[$im]['pegawai']=$querypegawai->result_array();

				   $querypejabat = $this->db->query("SELECT * FROM pegawai WHERE id_pegawai='$idpejabatman' ");
				   $datacount[$im]['pejabat']=$querypejabat->result_array();
				   
				   $im++;
				}
				
				foreach($data2->result_array() as $dataman)
				{
				   $idman=$dataman['id_agenda'];
				   $idpegawaiman=$dataman['id_pegawai'];
				   $idpejabatman=$dataman['id_pejabat'];
				   
				   
				   $querypegawai = $this->db->query("SELECT * FROM pegawai WHERE id_pegawai='$idpegawaiman' ");
				   $datacount[$im]['pegawai']=$querypegawai->result_array();

				   $querypejabat = $this->db->query("SELECT * FROM pegawai WHERE id_pegawai='$idpejabatman' ");
				   $datacount[$im]['pejabat']=$querypejabat->result_array();
				   
				   $im++;
				}
	
			   $x=array(
					 'judul' =>'Laporan Agenda Per Pegawai',
					 'datacount' => $datacount,
					 'pegawai'=>$this->db->get('pegawai')->result_array(),
					 'data'=>$this->m_laporan->agenda2($dari,$sampai,$nip),
					 'data2'=>$this->m_laporan->agenda3($dari,$sampai,$nip),
					 'depan'=>FALSE,
					 'cetak'=>TRUE);
					 
				$pesan='<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-check"></i> Hasil Laporan!</h4>
					   Data Laporan Agenda Terhitung Dari.'.tgl_indonesia($this->input->post('dari')).' Sampai Dengan '.tgl_indonesia($this->input->post('sampai')).'
					  </div>';
				$this->session->set_flashdata('pesan',$pesan); 
				tpl('laporanagenda/agendapegawai',$x);
			
			}
			else
			{

				$x = array('judul' =>'Laporan Agenda Per Pegawai',
					  'pegawai'=>$this->db->get('pegawai')->result_array(),
					   'depan'=>TRUE,
					   'cetak'=>FALSE);	
				tpl('laporanagenda/agendapegawai',$x);
			}
	  }
	  
	  
	  public function cetak_laporan_pegawaiagenda($dari='',$sampai='')
	  { 
			$data=$this->m_laporan->pegawai();
		 
			$im=0;
			foreach($data->result_array() as $dataman)
			{
			   //$idman=$dataman['id_agenda'];
			   $idpegawaiman=$dataman['id_pegawai'];
			   //$idpejabatman=$dataman['id_pejabat'];
			   
			   
			   $querypegawai = $this->db->query("SELECT * FROM agenda a WHERE id_pegawai='$idpegawaiman' AND a.tanggal between '$dari' AND '$sampai'");
			   $datacount[$im]['pegawai']=$querypegawai->result_array();
			   $datacount[$im]['pegawaicount']=$querypegawai->num_rows();

			   $queryagendapegawai = $this->db->query("SELECT * FROM agendapegawai a INNER JOIN agenda b ON(a.id_agenda=b.id_agenda)WHERE a.id_pegawai='$idpegawaiman' AND b.tanggal between '$dari' AND '$sampai' ");
			   $datacount[$im]['agendapegawai']=$queryagendapegawai->result_array();
			   $datacount[$im]['agendapegawaicount']=$queryagendapegawai->num_rows();
			   
			   $im++;
			}
			
			$x = array(
				   'cetak'=>FALSE,
				   'depan'=>FALSE,
				   'datacount'=>$datacount,
				   'pegawai'=>$this->db->get('pegawai')->result_array(),
				   'data'=>$data,
				   'judul' =>'Laporan Agenda Pegawai Aktif');
				   
				   
			$this->load->view('laporanagenda/pegawaiagenda',$x);      
	 }

	  
	  public function laporan_pegawaiagenda($value='')
	  {
		 
		if(isset($_POST['cari'])) 
		{
				$dari=$this->input->post('dari');
			    $sampai=$this->input->post('sampai');
				$data=$this->m_laporan->pegawai();
			 
				$im=0;
				foreach($data->result_array() as $dataman)
				{
				   //$idman=$dataman['id_agenda'];
				   $idpegawaiman=$dataman['id_pegawai'];
				   //$idpejabatman=$dataman['id_pejabat'];
				   
				   
				   $querypegawai = $this->db->query("SELECT * FROM agenda a WHERE id_pegawai='$idpegawaiman' AND a.tanggal between '$dari' AND '$sampai'");
				   $datacount[$im]['pegawai']=$querypegawai->result_array();
				   $datacount[$im]['pegawaicount']=$querypegawai->num_rows();

				   $queryagendapegawai = $this->db->query("SELECT * FROM agendapegawai a INNER JOIN agenda b ON(a.id_agenda=b.id_agenda)WHERE a.id_pegawai='$idpegawaiman' AND b.tanggal between '$dari' AND '$sampai' ");
				   $datacount[$im]['agendapegawai']=$queryagendapegawai->result_array();
				   $datacount[$im]['agendapegawaicount']=$queryagendapegawai->num_rows();
				   
				   $im++;
				}
				
				 $x=array(
					 'judul'=>'Data Laporan Agenda Pegawai Aktif',
					 'datacount' => $datacount,
					 'pegawai'=>$this->db->get('pegawai')->result_array(),
					 'data'=>$data,
					 'depan'=>FALSE,
					 'cetak'=>TRUE);
				
				$pesan='<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-check"></i> Hasil Laporan!</h4>
					   Data Laporan Agenda Terhitung Dari.'.tgl_indonesia($this->input->post('dari')).' Sampai Dengan '.tgl_indonesia($this->input->post('sampai')).'
					  </div>';
				$this->session->set_flashdata('pesan',$pesan); 
				tpl('laporanagenda/pegawaiagenda',$x);
		}
		else
		{
			 $x = array('judul' =>'Laporan Data Agenda Pegawai Aktif',
					 'data'=>$this->m_laporan->pegawai(),
					 'depan'=>TRUE,
					 'print'=>FALSE,);	
			 tpl('laporanagenda/pegawaiagenda',$x);	
		}
	  }
	  
	  
	  public function cetak_laporan_deputiagenda($dari='',$sampai='')
	  { 
			$data=$this->m_laporan->deputi();
			$data2=$this->m_laporan->unitkerja();
			
			$im=0;
			foreach($data->result_array() as $dataman)
			{
			   //$idman=$dataman['id_agenda'];
			   $iddeputiman=$dataman['id_deputi'];
			   //$idpejabatman=$dataman['id_pejabat'];
			   
			   
			   $querypegawai = $this->db->query("SELECT * FROM agenda a INNER JOIN pegawai b ON(a.id_pegawai=b.id_pegawai) WHERE a.tanggal between '$dari' AND '$sampai' AND b.id_deputi='$iddeputiman'");
			   $datacount[$im]['pegawai']=$querypegawai->result_array();
			   $datacount[$im]['pegawaicount']=$querypegawai->num_rows();

			   $queryagendapegawai = $this->db->query("SELECT * FROM agendapegawai a INNER JOIN agenda b ON(a.id_agenda=b.id_agenda) INNER JOIN pegawai c ON(a.id_pegawai=c.id_pegawai) WHERE b.tanggal between '$dari' AND '$sampai' AND c.id_deputi='$iddeputiman' ");
			   $datacount[$im]['agendapegawai']=$queryagendapegawai->result_array();
			   $datacount[$im]['agendapegawaicount']=$queryagendapegawai->num_rows();
			   
			   $im++;
			}
				
			$x = array(
				   'cetak'=>FALSE,
				   'depan'=>FALSE,
				   'datacount'=>$datacount,
				   'pegawai'=>$this->db->get('pegawai')->result_array(),
				   'data'=>$data,
				   'data2'=>$data2,
				   'judul'=> 'Laporan Agenda SatuanKerja');
				   
				   
			$this->load->view('laporanagenda/deputiagenda',$x);      
	 }
	  
	  public function laporan_satuanagenda($value='')
	  {
		 
		if(isset($_POST['cari'])) 
		{
				$dari=$this->input->post('dari');
			    $sampai=$this->input->post('sampai');
				$data=$this->m_laporan->deputi();
				$data2=$this->m_laporan->unitkerja();
			 
				
				$im=0;
				foreach($data->result_array() as $dataman)
				{
				   //$idman=$dataman['id_agenda'];
				   $iddeputiman=$dataman['id_deputi'];
				   //$idpejabatman=$dataman['id_pejabat'];
				   
				   
				   $querypegawai = $this->db->query("SELECT * FROM agenda a INNER JOIN pegawai b ON(a.id_pegawai=b.id_pegawai) WHERE a.tanggal between '$dari' AND '$sampai' AND b.id_deputi='$iddeputiman'");
				   $datacount[$im]['pegawai']=$querypegawai->result_array();
				   $datacount[$im]['pegawaicount']=$querypegawai->num_rows();

				   $queryagendapegawai = $this->db->query("SELECT * FROM agendapegawai a INNER JOIN agenda b ON(a.id_agenda=b.id_agenda) INNER JOIN pegawai c ON(a.id_pegawai=c.id_pegawai) WHERE b.tanggal between '$dari' AND '$sampai' AND c.id_deputi='$iddeputiman' ");
				   $datacount[$im]['agendapegawai']=$queryagendapegawai->result_array();
				   $datacount[$im]['agendapegawaicount']=$queryagendapegawai->num_rows();
				   
				   $im++;
				}
				
				
				
				 $x=array(
					 'judul'=>'Laporan Agenda SatuanKerja',
					 'datacount' => $datacount,
					 'pegawai'=>$this->db->get('pegawai')->result_array(),
					 'data'=>$data,
					 'depan'=>FALSE,
					 'cetak'=>TRUE);
				
				$pesan='<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-check"></i> Hasil Laporan!</h4>
					   Data Laporan Agenda Terhitung Dari.'.tgl_indonesia($this->input->post('dari')).' Sampai Dengan '.tgl_indonesia($this->input->post('sampai')).'
					  </div>';
				$this->session->set_flashdata('pesan',$pesan); 
				tpl('laporanagenda/deputiagenda',$x);
		}
		else
		{
			 $x = array('judul' =>'Laporan Agenda SatuanKerja',
					 'data'=>$this->m_laporan->pegawai(),
					 'depan'=>TRUE,
					 'print'=>FALSE,);	
			 tpl('laporanagenda/deputiagenda',$x);	
		}
	  }
	  
	  
	  public function index()
	  {
		$id   = ($this->session->userdata('level') == "pegawai") ? $this->session->userdata('id_pegawai') : $this->session->userdata('id_admin');
		$data = ($this->session->userdata('level') == "pegawai") ? $this->m_admin->cari_agenda_pegawai($id) : $this->m_admin->agenda_pegawai();
		
		$datacount=array();
		
		$im=0;
		foreach($data->result_array() as $dataman)
		{
		   $idman=$dataman['id_agenda'];
		   $idpegawaiman=$dataman['id_pegawai'];
		   $idpejabatman=$dataman['id_pejabat'];
		   
		   $querypegawai = $this->db->query("SELECT * FROM pegawai WHERE id_pegawai='$idpegawaiman' ");
		   $datacount[$im]['pegawai']=$querypegawai->result_array();

		   $querypejabat = $this->db->query("SELECT * FROM pegawai WHERE id_pegawai='$idpejabatman' ");
		   $datacount[$im]['pejabat']=$querypejabat->result_array();
		   
		   $im++;
		}
		
		//print_r($datacount);
		//exit();
		//$this->db->get('pegawai')->result_array();
		
		$x = array('judul' =>'Agenda Pegawai',
				  'datacount' => $datacount,
				  'data'  =>$data); 
		tpl('admin/agenda',$x);
	  }
  
	public function excel()
	{
		$this->load->helper('exportexcel');
		$namaFile = "tbl_agenda.xls";
		$judul = "tbl_agenda";
		$tablehead = 0;
		$tablebody = 1;
		$nourut = 1;
		//penulisan header
		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
		header("Content-Type: application/force-download");
		header("Content-Type: application/octet-stream");
		header("Content-Type: application/download");
		header("Content-Disposition: attachment;filename=" . $namaFile . "");
		header("Content-Transfer-Encoding: binary ");
  
		xlsBOF();
  
		$kolomhead = 0;
			  xlsWriteLabel($tablehead, $kolomhead++, "No");
			  xlsWriteLabel($tablehead, $kolomhead++, "Nama Agenda");
			  xlsWriteLabel($tablehead, $kolomhead++, "Tgl Agenda");
			  xlsWriteLabel($tablehead, $kolomhead++, "Jam Mulai");
			  xlsWriteLabel($tablehead, $kolomhead++, "Jam Selesai");
  
			foreach ($this->db->query("SELECT * from agenda d LEFT JOIN pegawai a ON(d.id_pegawai=a.id_pegawai)")->result() as $data) {
				  $kolombody = 0;
  
				  //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
				  xlsWriteNumber($tablebody, $kolombody++, $nourut);
				  xlsWriteLabel($tablebody, $kolombody++, $data->nama_agenda);
				  xlsWriteLabel($tablebody, $kolombody++, $data->tanggal);
				  xlsWriteLabel($tablebody, $kolombody++, $data->jam_mulai);
				  xlsWriteLabel($tablebody, $kolombody++, $data->jam_selesai);
  
				   $tablebody++;
				  $nourut++;
			 }
  
			xlsEOF();
			exit();
	}
  
	public function word()
	{
		header("Content-type: application/vnd.ms-word");
		header("Content-Disposition: attachment;Filename=tbl_agenda.doc");
  
		$data = array(
			'tbl_agenda_data' => $this->db->query("SELECT * from agenda d LEFT JOIN pegawai a ON(d.id_pegawai=a.id_pegawai)")->result(),
			'start' => 0
		);
		
		$this->load->view('admin/tbl_agenda_doc',$data);
	}
  
	  
}