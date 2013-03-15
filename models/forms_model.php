<?php

class Forms_Model extends Model {

  function __construct() {
    parent::__construct();
  }

  public function checkusername($username) {
    //RAWWR!! :)
    $object = $this->db->query("SELECT username FROM ss_user WHERE username='" . $username . "'");
    $data = $object->fetchAll();
    if (!isset($data) || count($data) == 0) {
      $response['available'] = 'true';
    } else {
      $response['available'] = 'false';
    }

    return (json_encode($response));
  }

  public function login($username) {
    $usr = json_decode($username);
    $username = $usr->username;
    $password = $usr->password;
    $query = $this->db->prepare("SELECT id FROM ss_user WHERE
      login = :login AND password = MD5(:password)");
    $query->execute(array(
        ':login' => $username,
        ':password' => $password
    ));
    $data = $query->fetchAll();
    if(count($data) > 0)
      return json_encode($data[0]);
    else
      return '{}';
    //return json_encode("{id:1}");
  }

}