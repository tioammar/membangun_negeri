<?php
require_once("config.php");
require_once("model/Notification.php");

class Process {

  public $id;
  public $t;
  public $table;

  function __construct($id, $t, $table, $unit){
     $this->id = $id;
     $this->t = $t;
     $this->table = $table;
     $this->unit = $unit;
  }

  function updateReal($value){
    if($this->update($this->id, $this->t, $value, "real") == QUERY_SUCCESS){
      return $this->updateStatus(STATUS_EDITED, "");
    } else return QUERY_FAILED;
  }

  public function updateStatus($value, $message){
    if($this->update($this->id, $this->t, $value, "stt") == QUERY_SUCCESS){
      if($value != STATUS_RELEASED){
        $notif = new Notification($this->unit, $this->table);
        $notif->setMessage($value, $this->id, $this->t, $message);
        return $notif->send($message);
      } else {
        return QUERY_SUCCESS;
      }
    } return QUERY_FAILED;
  }

  public function updateEvidence($value){
    if($this->update($this->id, $this->t, $value, "evid")){
      return UPLOAD_OK;
    } else {
      return UPLOAD_NOK;
    }
  }

  public function update($id, $t, $value, $type){
    $Q = "UPDATE $this->table SET `".$type."_".$t."` = '$value' WHERE `id` = $id";
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if(!$mysqli->query($Q)){
      return QUERY_FAILED;
    } else {
      return QUERY_SUCCESS;
    }
  }
}
?>