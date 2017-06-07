<?php
require_once("Base.php");

class Program extends Base {

  function __construct(){
    $this->table = "program";
    $this->count = 12;
  }

  public static function load($indikator){
    $instance = new self();
    $instance->make($indikator);
    return $instance;
  }

  public static function loadById($id){
    $instance = new self();
    $instance->makeById($id);
    return $instance;
  }

  public static function getCodeByUnit($unit){
    $instance = new self();
    return $instance->getCodeUnit($unit);
  }
}
?>