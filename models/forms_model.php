<?php

class Forms_Model extends Model{
  function __construct(){
    parent::__construct();
  }  
  
  public function checkusername($username){
    //RAWWR!! :)
    $object = $this->db->query("SELECT username FROM ss_user WHERE username='" . $username . "'");
    $data = $object->fetchAll();
    if(!isset($data) || count($data) == 0){
      $response['available'] = 'true';
    } else{
      $response['available'] = 'false';
    }
    
    echo (json_encode($response));
  }
}