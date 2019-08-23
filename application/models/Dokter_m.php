<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_m extends CI_Model {

   public $tb_dokter ="tb_dokter";

    public function getDataDokter(){
        $query = $this->db->get($this->tb_dokter); 
        return $query->result_array();
    }

    public function deleteDocter($id_dokter){
        $this->db->delete($this->tb_dokter, array('id_dokter' => $id_dokter));
    }

    public function insertDocter($nama_dokter,$spesialis,$alamat,$no_telp){
        $data = array(
            'nama_dokter' => $nama_dokter,
            'spesialis' => $spesialis,
            'alamat' => $alamat,
            'no_telp' => $no_telp
        );
        $this->db->insert($this->tb_dokter, $data);
    }

    public function updateDokter($id_dokter,$nama_dokter,$spesialis,$alamat,$no_telp){
            $data = array(
            'nama_dokter' => $nama_dokter,
            'spesialis' => $spesialis,
            'alamat' => $alamat,
            'no_telp' => $no_telp
        );
        $this->db->where('id_dokter',$id_dokter);
        $this->db->update($this->tb_dokter,$data);
    }

    public function getSingleDocter($idDokter){
        $this->db->where('id_dokter',$idDokter);
        $query = $this->db->get($this->tb_dokter,1);
        return $query->result_array();
	}
}

