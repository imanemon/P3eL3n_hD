<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin_model extends CI_Model {
	public function __construct()
		{
			$this->load->database();
			$this->load->library('session');
			// $this->load->library('url');
			// $this->load->helper("back_handler");
		}
	
	public function aktivasi(){
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->join('kantor','pegawai.kantor=kantor.id_kantor');
        $this->db->join('jabatan','pegawai.jabatan=jabatan.id_jabatan');
        $this->db->join('sub_divisi','pegawai.sub_divisi=sub_divisi.id_sub_divisi');
        return $this->db->get();
    }
	
	function update_pegawai($nip,$aktivasi,$tgl_diedit,$diedit_oleh) {
		$data = array(
			   'aktivasi' => $aktivasi,
			   'tgl_diedit' =>  $tgl_diedit, 
			   'diedit_oleh' => $diedit_oleh
			);

		$this->db->where('nip', $nip);
		$this->db->update('pegawai', $data); 
    }
    
	public function edit_pegawai(){
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->join('kantor','pegawai.kantor=kantor.id_kantor');
        $this->db->join('jabatan','pegawai.jabatan=jabatan.id_jabatan');
        $this->db->join('sub_divisi','pegawai.sub_divisi=sub_divisi.id_sub_divisi');
        return $this->db->get();
    }
	
	function addData($tabel, $data){
		$this->db->insert($tabel, $data);
	}
	
	function getDivisi(){
		$this->db->select('*');
        $this->db->from('divisi');
        return $this->db->get();
	}
}
 
/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */