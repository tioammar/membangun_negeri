<?php
require_once(__DIR__."/../config.php");
require_once("Event.php");
require_once("Program.php");
require_once("LogInterface.php");

class Notification extends Event {
  protected $table = "notification";
  
  public function setMessage($value, $id, $tw){
    $this->message = $this->build($value, $id, $tw);
    switch($value){
      case STATUS_APPROVED:
        $this->subj = ADMIN_SM;
        $this->dest = ADMIN_ALL;
        break;
      case STATUS_REJECTED:
        $this->subj = ADMIN_SM;
        $this->dest = ADMIN_UNIT;
        break;
      case STATUS_EDITED:
        $this->subj = ADMIN_UNIT;
        $this->dest = ADMIN_SM;
        break;
      case STATUS_NOT_RELEASED:
        $this->subj = ADMIN_ALL;
        $dthis->dest = ADMIN_UNIT;
        break;
    }
  }
  public function send($message){
    $log = new LogInterface($this->unit, $this->type);
    if($log->send($this) == QUERY_SUCCESS){
      $Q = "INSERT INTO $this->table (notification, subj, dest, type, unit, message) VALUE ('$this->message', '$this->subj', '$this->dest', '$this->type', '$this->unit', '$message')";
      if($this->mysqli->query($Q)){
        return QUERY_SUCCESS;
      } else return QUERY_FAILED;
    }
  }
  private function build($value, $id, $tw){
    $message = "";
    if($this->type == "program"){
      $p = Program::loadById($id);
      $indikator = $p->indikator;
      $witel = $p->witel;
    }
    switch($value){
      case STATUS_APPROVED:
        $message = "Realisasi $indikator Bulan $tw Witel $witel Telah Disetujui";
        break;
      case STATUS_REJECTED:
        $message = "Realisasi $indikator Bulan $tw Witel $witel Telah Ditolak";
        break;
      case STATUS_EDITED:
        $message = "Realisasi $indikator Bulan $tw Witel $witel Telah Diubah";
        break;
      case STATUS_NOT_RELEASED:
        $message = "Realisasi $indikator Bulan $tw Witel $witel Tidak Ditolak";
        break;
    }
    return $message;
  }
}