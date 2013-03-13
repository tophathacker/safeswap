<?php

class db_object {
  public $dbhost;
  public $dbuser;
  public $dbpass;
  public $dbname;
  public $dbprefix;
  public $connection;

  public function __construct($dbhost,$dbuser,$dbpass,$dbprefix,$dbname) {
    //constructor for db_object, variables should explain themselves
    $this->dbhost = $dbhost;
    $this->dbuser = $dbuser;
    $this->dbpass = $dbpass;
    $this->dbname = $dbname;
    $this->dbprefix = $dbprefix;
  }

  public function open_db() {
    //I made this public, but might make it private later, if I don't need it.
    $this->connection = mysql_connect($this->dbhost,$this->dbuser,$this->dbpass);
    @mysql_select_db($this->dbname) or die( "Unable to select database");
  }

  public function close_db() {
    //do I need to explain this?
    mysql_close($this->connection);
  }

  public function get_users() {
    //this isn't the way it'll be handled later, just for testing.
    if(!$this->connection)
      $this->open_db();
    $query = 'SELECT username FROM ' . $this->dbprefix . 'user';
    $query_result = mysql_query($query);
    $return_value = array();
    for($i = 0; $i < mysql_numrows($query_result); $i++){
      $return_value[$i] = mysql_result($query_result,$i,'username');
    }
    return $return_value;
  }
  
  public function check_db_config() {
    //check if the db settings are correct
    //fill this out later
  }
  
}
