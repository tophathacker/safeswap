<?php

class Index_Model extends Model{
  function __construct(){
    parent::__construct();
  }  
  
  public function getPost(){
    //RAWWR!! :)
    $data = $this->db->query("SELECT username FROM ss_user");
    print_r($data->fetchAll());
  }
}
