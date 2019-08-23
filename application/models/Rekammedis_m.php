<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekammedis_m extends CI_Model {

  
   public function getRekamMedis(){
    $this->db->join('tb_pasien','tb_pasien.id_pasien=tb_rekammedis.id_pasien');
    $this->db->join('tb_dokter','tb_dokter.id_dokter=tb_rekammedis.id_dokter');
     $this->db->join('tb_ruangan','tb_ruangan.id_ruangan=tb_rekammedis.id_ruangan');

      $query = $this->db->get('tb_rekammedis');
      return $query->result_array();
   } 

   public function addRekamMedis($data){
      
    return $this->db->insert('tb_rekammedis', $data);

   }

   public function deleteRekamMedis($id_rm){
        $this->db->delete('tb_rekammedis', array('id_rm' => $id_rm));
    }

    public function updateRekamMedis($data, $id_rm){
    return $this->db->update('tb_rekammedis', $data, ['id_rm'=>$id_rm]);
       
    }

     public function getOne($id_rm){
     $this->db->join('tb_pasien','tb_pasien.id_pasien=tb_rekammedis.id_pasien');
     $this->db->join('tb_dokter','tb_dokter.id_dokter=tb_rekammedis.id_dokter');
     $this->db->join('tb_ruangan','tb_ruangan.id_ruangan=tb_rekammedis.id_ruangan');
     $this->db->where(['id_rm'=>$id_rm]);
     

      $query = $this->db->get('tb_rekammedis');
      return $query->row_array();

    }


}

