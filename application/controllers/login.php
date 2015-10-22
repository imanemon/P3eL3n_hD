<?php
class Login extends CI_Controller {
 
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
 
	public function index() 
	{
		$this->load->view("login");
	}

	//fungsi untuk login
	public function user() {
		//memanggil model
        $this->load->model('auth_model');
        
		//authentikasi pegawai/user (password di hash dengan MD5)
		$login = $this->auth_model->login($this->input->post('username'), md5($this->input->post('password')));
 
        if ($login == 1) {
			//pengecekan apakah akun telah aktif atau belum
			$aktivasi = $this->auth_model->aktivasi($this->input->post('username'), md5($this->input->post('password')), md5($this->input->post('username')));
			
			if($aktivasi == 1){
				//ambil detail data
				$row = $this->auth_model->data_login($this->input->post('username'), md5($this->input->post('password')));
				
				//update last login update dari user
				$datetime_now = date("Y-m-d H:i:s", strtotime('+5 hours'));
				$last_login = $this->auth_model->last_login($row->nip,$datetime_now);
				
				//daftarkan session dengan menyimpan pada array data
				$data = array(
					'logged' => TRUE,
					'nip' => $row->nip,
					'username' => $row->username,
					'nama_pegawai' => $row->nama_pegawai,
					'level' => $row->jabatan,
					'team' => $row->team,
					
				);
				
				//menyimpan data pada session
				$this->session->set_userdata($data);
				
				//7 untuk pegawai teknisi
				if($row->jabatan == 7) {
					redirect('/teknisi/dashboard');
				//6 untuk pegawai helpdesk	
				}else if($row->jabatan == 6) {
					redirect('/helpdesk/dashboard');
				//8 untuk pegawai admin helpdesk
				}else if($row->jabatan == 8) {
					redirect('/admin/dashboard');
				//4 untuk kepala divisi
				}else if($row->jabatan == 4) {
					redirect('/kepala/dashboard');
				}else{
					redirect('/user/index');
				}
			}else{
				// tampilkan pesan error jika akun belum aktif
				echo " <script>
							alert('Gagal Login: Akun Belum aktif');
							history.go(-1);
						</script>";
			}
			
		} else {
			//tampilkan pesan error jika username dan password salah
			echo " <script>
						alert('Gagal Login: Username anda password anda salah');
						history.go(-1);
					</script>";
		}
    }
	
	//fungsi untuk logout
	public function logout() {
		$this->session->sess_destroy();
		$this->load->view('login');
	}
}