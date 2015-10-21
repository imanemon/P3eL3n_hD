<?php
class Daftar extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->library('form_validation');
		
			//men-disable back setelah logout
			$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
			$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
			$this->output->set_header('Pragma: no-cache');
		
	}
 
	public function index(){
		
		$this->load->model('daftar_model');
		$getKantor = $this->daftar_model->getKantor()->result();
		$getJabatan = $this->daftar_model->getJabatan()->result();
		$getSubDivisi = $this->daftar_model->getSubDivisi()->result();
		$getTeam = $this->daftar_model->getTeam()->result();
		
		$data = array(
			'kantor' => $getKantor,
			'jabatan' => $getJabatan,
			'sub_divisi' => $getSubDivisi,
			'team' => $getTeam,
		);
				
		$this->load->view('daftar',$data);
		
	}
	
	public function input(){
		
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$hp = $this->input->post('hp');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$password2 = md5($this->input->post('password2'));
		$kantor = $this->input->post('kantor');
		$jabatan = $this->input->post('jabatan');
		$sub_divisi = $this->input->post('sub_divisi');
		$create_date = date("Y-m-d H:i:s", strtotime('+5 hours'));
		$aktivasi = '0';
		if($this->input->post('team') != NULL){
			$team = $this->input->post('team');
		}else{
			$team = NULL;
		}
		
		
		$data = array(
			'nip' => $nip,
			'nama_pegawai' => $nama,
			'no_tlp_pegawai' => $hp,
			'email_pegawai' => $email,
			'username' => $username,
			'password' => $password,
			'kantor' => $kantor,
			'jabatan' => $jabatan,
			'sub_divisi' => $sub_divisi,
			'team' => $team,
			'aktivasi' => $aktivasi,
			'create_date' => $create_date,
		);
		
		$this->load->model('daftar_model');
		if($password == $password2){
			$this->daftar_model->masukkan_data($data);	
			$this->load->view('berhasil');
		}else{
			echo " <script>
						alert('Password dan Ulang Password Berbeda');
						history.go(-1);
					</script>";
		}
		
	}
	
}