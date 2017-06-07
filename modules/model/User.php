<?php
require_once(__DIR__."/../config.php");

class User {

  public $nik;
  public $name;
  public $level;
  public $unit;

  function __construct($nik){
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $Q = "SELECT * FROM user WHERE `nik` = '$nik'";
    $row = $mysqli->query($Q);
    if($r = $row->fetch_array()){
      $this->nik = $r['nik'];
      $this->name = $r['full_name'];
      $this->level = $r['level'];
      $this->unit = $r['unit'];
    } else {
      $this->nik = $nik;
      $this->name = 'Guest';
      $this->level = USER;
      $this->unit = null;
    }
  }
}