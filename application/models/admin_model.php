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
	
	function update_data_pegawai($nip,$kantor, $sub_divisi, $jabatan, $team,$tgl_diedit,$diedit_oleh) {
		$data = array(
			   'kantor' => $kantor,
			   'sub_divisi' => $sub_divisi,
			   'jabatan' => $jabatan,
			   'team' => $team,
			   'tgl_diedit' =>  $tgl_diedit, 
			   'diedit_oleh' => $diedit_oleh
			);

		$this->db->where('nip', $nip);
		$this->db->update('pegawai', $data); 
    }
    
	public function edit_pegawai($nip){
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->join('kantor','pegawai.kantor=kantor.id_kantor');
        $this->db->join('jabatan','pegawai.jabatan=jabatan.id_jabatan');
        $this->db->join('sub_divisi','pegawai.sub_divisi=sub_divisi.id_sub_divisi');
        // $this->db->join('team','pegawai.team=team.id_team');
        $this->db->where('nip',$nip);
        return $this->db->get();
    }
	
	public function get_kantor(){
        $this->db->select('*');
        $this->db->from('kantor');
        return $this->db->get();
    }
	public function get_jabatan(){
        $this->db->select('*');
        $this->db->from('jabatan');
        return $this->db->get();
    }
	public function get_sub_divisi(){
        $this->db->select('*');
        $this->db->from('sub_divisi');
        return $this->db->get();
    }
	public function get_team(){
        $this->db->select('*');
        $this->db->from('team');
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