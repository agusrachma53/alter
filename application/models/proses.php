<?php

/**
 *
 */
class proses extends CI_Model
{

  function tampil_article(){
    $data = $this->db->get('article');
    return $data;
  }
  function proses_insert_article($data){
    $judul = $this->db->insert('article',$data);
    return $data;
  }



}



?>
