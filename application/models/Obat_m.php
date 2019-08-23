<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat_m extends CI_Model {

   public $tb_obat ="tb_obat";

    public function getDataObat(){
        $query = $this->db->get($this->tb_obat); 
        return $query->result_array();
    }

    public function deleteObat($id_obat){
        $this->db->delete($this->tb_obat, array('id_obat' => $id_obat));
    }

    public function insertObat($nama_obat,$keterangan_obat){
        $data = array(
            'nama_obat' => $nama_obat,
            'keterangan_obat' => $keterangan_obat
        );
        $this->db->insert($this->tb_obat, $data);
    }

    public function updateObat($id_obat,$nama_obat,$keterangan_obat){
            $data = array(
            'nama_obat' => $nama_obat,
            'keterangan_obat' => $keterangan_obat
        );
        $this->db->where('id_obat',$id_obat);
        $this->db->update($this->tb_obat,$data);
    }

    public function getSingleObat($id_obat){
        $this->db->where('id_obat',$id_obat);
        $query = $this->db->get($this->tb_obat,1);
        return $query->result_array();
	}
}

