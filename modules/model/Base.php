<?php
class Base {

  public $id;
  public $indikator = array();
  public $witel;
  public $satuan;
  public $tahun;
  public $target;
  public $realisasi = array();
  public $ytd = array();
  public $status = array();
  public $table;
  public $unit;
  protected $count;

  public function make($indikator){
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $Q = "SELECT * FROM $this->table WHERE `indikator` = '$indikator'";
    $row = $mysqli->query($Q);
    $this->fill($row);
    return $this;
  }

  public function getCode($name, $variable){
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $Q = "SELECT DISTINCT kode FROM $this->table WHERE `$name` = '$variable'";
    // echo $Q;
    $row = $mysqli->query($Q);
    $codes = array();
    $i = 0;
    while($r = $row->fetch_array()){
      $codes[$i] = $r['kode'];
      $i++;
    }
    return $codes;
  }

  public function getCodeUnit($unit){
    return $this->getCode('unit', $unit);
  }

  public function getCodeAll(){
    
  }

  public function makeById($id){
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $Q = "SELECT * FROM $this->table WHERE `id` = '$id'";
    $row = $mysqli->query($Q);
    $this->fill($row);
    return $this;
  }

  private function fill($row){
    if($r = $row->fetch_array()){
      $this->id = $r['id'];
      $i = 1;
      $this->indikator = $r['indikator'];
      $this->witel = $r['witel'];
      $this->tahun = $r['tahun'];
      $this->satuan = $r['satuan'];
      $this->target = $r['target'];
      while($i <= $this->count){
        $this->realisasi[$i] = $r['real_'.$i];
        $this->status[$i] = $r['stt_'.$i];
        $i++;
      }
      $this->unit = $r['unit'];
    }
  }
}
?>