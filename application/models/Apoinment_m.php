<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apoinment_m extends CI_Model {

   public $tb_appoinment ="tb_appointment";


   public function insertAppoimnet($id_pasien,$id_dokter,$tgl_janji,$pesan){
         $data = array(
            'id_pasien' => $id_pasien,
            'id_dokter' => $id_dokter,
            'tgl_janji' => $tgl_janji,
            'pesan' => $pesan
        );
        $this->db->insert($this->tb_appoinment, $data);
   }

     public function getAppoinment(){

    $this->db->join('tb_pasien','tb_pasien.id_pasien=tb_appointment.id_pasien');
    $this->db->join('tb_dokter','tb_dokter.id_dokter=tb_appointment.id_dokter');
  

      $query = $this->db->get('tb_appointment');
      return $query->result_array();
   } 
   
}

