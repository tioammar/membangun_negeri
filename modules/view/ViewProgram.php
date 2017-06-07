<?php
require_once("View.php");
require_once("TableProgram.php");

class ViewProgram extends View {

  public $statusType = "statusprog";
  public $updateType = "updateprog";
  public $uploadType = "uploadprog";
  public $count = 12;

  public function setTable(){
    return new TableProgram($this);
  }
}