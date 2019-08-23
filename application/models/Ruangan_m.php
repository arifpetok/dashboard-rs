<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan_m extends CI_Model {

   public $tb_ruangan ="tb_ruangan";

    public function getDataRuangan(){
        $query = $this->db->get($this->tb_ruangan); 
        return $query->result_array();
    }

    public function deleteRuangan($id_ruangan){
        $this->db->delete($this->tb_ruangan, array('id_ruangan' => $id_ruangan));
    }

    public function insertRuangan($nama_ruangan,$gedung){
        $data = array(
            'nama_ruangan' => $nama_ruangan,
            'gedung' => $gedung
        );
        $this->db->insert($this->tb_ruangan, $data);
    }

    public function updateRuangan($id_ruangan,$nama_ruangan,$gedung){
            $data = array(
            'nama_ruangan' => $nama_ruangan,
            'gedung' => $gedung
        );
        $this->db->where('id_ruangan',$id_ruangan);
        $this->db->update($this->tb_ruangan,$data);
    }

    public function getSingleRuangan($id_ruangan){
        $this->db->where('id_ruangan',$id_ruangan);
        $query = $this->db->get($this->tb_ruangan,1);
        return $query->result_array();
	}
}

