<?php
require_once("phpexcel/PHPExcel.php");
require_once("config.php");

class ExcelBase {

  protected $mysqli;
  public $file;
  protected $count;
  protected $table;

  function __construct($file){
    $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $this->file = $file;
  }

  public function read(){
    if(isset($this->file)){
      if($this->file['name']){
        $input = $this->file['tmp_name'];
        $ext = strtoupper(pathinfo($this->file['name'], PATHINFO_EXTENSION));
        if($ext == "XLSX"){
          try {
            $inputType = PHPExcel_IOFactory::identify($input);
            $reader = PHPExcel_IOFactory::createReader($inputType);
            $obj = $reader->load($input);
          } catch(Exception $e) {
            die("tidak dapat membaca file");
          }
          $sheet = $obj->getSheet(0);
          $Q = "TRUNCATE TABLE $this->table";
          $this->mysqli->query($Q);
          return $this->insert($sheet);
        }
      } 
    } else {
      return UPLOAD_NOK;
    }
  }

  public function insert($sheet){
    $rows = $sheet->getHighestRow();
    $columns = $sheet->getHighestColumn();
    $real = "";
    $stt = "";

    $r = 1;
    while($r <= $this->count){
      $real .= ", real_$r";
      $stt .= ", stt_$r";
      $r++;
    }
    $insertQuery = $real.$stt;

    if($rows < 2){
      return UPLOAD_NOK;
    } else {
      for($row = 2; $row <= $rows; $row++){
        $i = 0;
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $columns . $row, NULL, TRUE, FALSE);
        $array = $rowData[0];
        $Q = "INSERT INTO $this->table (indikator, witel, unit, kode, tahun, satuan, target$insertQuery) VALUES (
                '".$array[$i]."', '".$array[$i+1]."', '".$array[$i+2]."', '".$array[$i+3]."', '".$array[$i+4]."', '".$array[$i+5]."', '".$array[$i+6]."'";
        $r = 1;
        $rv = $i + 6;
        $vreal = "";
        while($r <= $this->count){
          $vr = $rv + $r;
          $vreal .= ", ".$array[$vr]."";
          $r++;
        }

        $s = 1;
        $sv = $vr;
        $vstt = "";
        while($s <= $this->count){
          $vs = $sv + $s;
          $vstt .= ", '".$array[$vs]."'";
          $s++;
        }

        $Q1 = $vreal.$vstt.")";
        $Q2 = $Q.$Q1;
        // echo $Q2;
        $this->mysqli->query($Q2);
      }
      return UPLOAD_OK;
    }
  }
}