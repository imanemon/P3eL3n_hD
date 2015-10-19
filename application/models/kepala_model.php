<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Kepala_model extends CI_Model {
	public function __construct()
		{
			$this->load->database();
			$this->load->library('session');
			// $this->load->library('url');
			// $this->load->helper("back_handler");
		}
	
	public function nip ($nama_pegawai){
		$this->db->select('nip');
		$this->db->from('pegawai');
		$this->db->where('nama_pegawai',$nama_pegawai);
		return $this->db->get();
	}
	
	
	public function perorangan($month,$year){
        $this->db->select('staf_teknisi,count(id_tiket) as jumlah,pegawai.nama_pegawai,round(avg(durasi)) as rata2');
        $this->db->from('tiket');
		$this->db->join('pegawai','tiket.staf_teknisi=pegawai.nip');
        $this->db->group_by('staf_teknisi');
        $this->db->where("YEAR(tgl_awal_tiket)",$year);
		$this->db->where("MONTH(tgl_awal_tiket)",$month);
        return $this->db->get();
    }
	
	public function tiket_kantor($month,$year){
        $this->db->select('kantor,count(id_tiket) as jumlah,kantor.nama_kantor,round(avg(durasi)) as rata2');
        $this->db->from('tiket');
		$this->db->join('kantor','tiket.kantor=kantor.id_kantor');
        $this->db->group_by('kantor');
        $this->db->where("YEAR(tgl_awal_tiket)",$year);
		$this->db->where("MONTH(tgl_awal_tiket)",$month);
        return $this->db->get();
    }
	
	public function tiket_kategori($month,$year){
        $this->db->select('kategori,count(id_tiket) as jumlah,kategori.nama_kategori,round(avg(durasi)) as rata2');
        $this->db->from('tiket');
		$this->db->join('kategori','tiket.kategori=kategori.id_kategori');
        $this->db->group_by('kategori');
        $this->db->where("YEAR(tgl_awal_tiket)",$year);
		$this->db->where("MONTH(tgl_awal_tiket)",$month);
        return $this->db->get();
    }
	
	public function tiket_prioritas($month,$year){
        $this->db->select('level_prioritas,count(id_tiket) as jumlah,level_prioritas.nama_level,round(avg(durasi)) as rata2');
        $this->db->from('tiket');
		$this->db->join('level_prioritas','tiket.level_prioritas=level_prioritas.id_level');
        $this->db->group_by('level_prioritas');
        $this->db->where("YEAR(tgl_awal_tiket)",$year);
		$this->db->where("MONTH(tgl_awal_tiket)",$month);
        return $this->db->get();
    }
	
	public function tiket_dampak($year){
        $query = $this->db->query("SELECT
								month(tgl_awal_tiket) as bulan,
							SUM(IF(dampak = 1,1,0)) AS Kritis,
							SUM(IF(dampak = 2,1,0)) AS Standar,
							SUM(IF(dampak = 3,1,0)) AS none
						FROM
							tiket
						where year(tgl_awal_tiket) = $year
						GROUP BY
							month(tgl_awal_tiket)");
		return $query->result();
    }
	
	public function rata2durasi($month,$year){
        $this->db->select('round(avg(durasi)) as rata2');
        $this->db->from('tiket');
        $this->db->where("YEAR(tgl_awal_tiket)",$year);
		$this->db->where("MONTH(tgl_awal_tiket)",$month);
        return $this->db->get();
    }
	
	
}
 
/* End of file kepala_model.php */
/* Location: ./application/models/kepala_model.php */