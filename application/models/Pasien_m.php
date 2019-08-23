<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_m extends CI_Model {

   public $tb_pasien ="tb_pasien";

    public function getDataPasien(){
        $query = $this->db->get($this->tb_pasien); 
        return $query->result_array();
    }

    public function deletePasien($id_pasien){
        $this->db->delete($this->tb_pasien, array('id_pasien' => $id_pasien));
    }

    public function insertPasien($nomor_identitas,$nama_pasien,$jenis_kelamin,$alamat,$no_telp){
        $data = array(
            'nomor_identitas' => $nomor_identitas,
            'nama_pasien' => $nama_pasien,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat,
            'no_telp' => $no_telp
        );
        $this->db->insert($this->tb_pasien, $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
        
    }

    public function updatePasien($id_pasien,$nomor_identitas,$nama_pasien,$jenis_kelamin,$alamat,$no_telp){
            $data = array(
            'nomor_identitas' => $nomor_identitas,
            'nama_pasien' => $nama_pasien,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat,
            'no_telp' => $no_telp
        );
        $this->db->where('id_pasien',$id_pasien);
        $this->db->update($this->tb_pasien,$data);
    }

    public function getSinglePasien($id_pasien){
        $this->db->where('id_pasien',$id_pasien);
        $query = $this->db->get($this->tb_pasien,1);
        return $query->result_array();
	}
}

