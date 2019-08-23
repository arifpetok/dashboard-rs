<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_m extends CI_Model {

   public $tb_post ="tb_post";


   public function insertAppoimnet($id_pasien,$id_dokter,$tgl_janji,$pesan){
         $data = array(
            'id_pasien' => $id_pasien,
            'id_dokter' => $id_dokter,
            'tgl_janji' => $tgl_janji,
            'pesan' => $pesan
        );
        $this->db->insert($this->tb_appoinment, $data);
   }

     public function getPost(){

    $this->db->join('tb_user','tb_user.user_id=tb_post.user_id');
  

      $query = $this->db->get('tb_post');
      return $query->result_array();
   } 
   
}

