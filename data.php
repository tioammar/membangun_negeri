<?php
require_once("modules/Process.php");
require_once("modules/config.php");
require_once("modules/Upload.php");
require_once("modules/Login.php");
require_once("modules/ExcelProgram.php");
require_once("modules/model/Notification.php");

session_start();

if(isset($_GET['id']) && isset($_GET['t'])){
  $id = $_GET['id'];
  $t = $_GET['t'];

  if(isset($_GET['statusprog'])){
    if(!isset($_SESSION['level'])){
      header("Location: ./?page=main");
    } else {
      if($_SESSION['level'] == USER) header("Location: ./?page=main");
    }
    $page = $_SESSION['level'] == ADMIN_ALL ? "adminall" : "admin";
    $process = new Process($id, $t, "program", $_SESSION['unit']);
    $status = $_GET['stt'];
    
    if($status != STATUS_REJECTED || $status != STATUS_NOT_RELEASED){
      $message = $_POST['message'];
    } else $message = "";

    if($process->updateStatus($status, $message) == QUERY_SUCCESS){
      header("Location: ./?page=$page");
    } else echo "Update Status Failed";
  } 

  if(isset($_GET['updateprog'])){
    if(!isset($_SESSION['level'])){
      header("Location: ./?page=main");
    } else {
      if($_SESSION['level'] == USER) header("Location: ./?page=main");
    }
    $process = new Process($id, $t, "program", $_SESSION['unit']);
    $real = $_POST['real'];
    $upload = new Upload("evidence/program/", $process);
    $file = $_FILES['evid'];
    // $status = $upload->upload($file);
    $status = UPLOAD_OK;
    if($status == UPLOAD_OK){
      if($process->updateReal($real) == QUERY_SUCCESS){
        header("Location: ./?page=admin");
      } else echo "Update Failed";
    }
  }
}

if(isset($_GET['deletenotif'])){
  $id = $_GET['id'];
  $notification = new Notification(null, null);
  if($notification->delete($id)){
    header("Location: ./?page=notifications");
  } else echo "Delete Failed";
}

  if(isset($_GET['uploadprog'])){
    if(!isset($_SESSION['level'])){
      header("Location: ./?page=main");
    } else {
      if($_SESSION['level'] != ADMIN_ALL) header("Location: ./?page=main");
    }
    $excel = new ExcelProgram($_FILES['excel']);
    if($excel->read() == UPLOAD_OK){
      header("Location: ./?page=adminall");
    } else echo "Upload Failed";
  }

if(isset($_GET["login"])){
  $nik = $_POST['nik'];
  $pass = $_POST['password'];
  $login = new Login($nik, $pass);
  $portal_auth = $login->auth();
  if($portal_auth === NOT_REGISTERED){
    header("Location:./?page=login&status=".NOT_REGISTERED);
  } else if ($portal_auth === WRONG_PASSWORD) {
    header("Location:./?page=login&status=".WRONG_PASSWORD);
  } else if ($portal_auth === NOT_CONNECTED){
    header("Location:./?page=login&status=".NOT_CONNECTED);
  } else {
    // create session
    $user = $login->getUser();
    $_SESSION['nik'] = $user->nik;
    $_SESSION['name'] = $user->name;
    $_SESSION['level'] = $user->level;
    if($user->unit != null){
      $_SESSION['unit'] = $user->unit;
    }
    header("Location:./?page=main");
  }
} 

if(isset($_GET["logout"])){
  unset($_SESSION['nik']);
  unset($_SESSION['name']);
  unset($_SESSION['level']);
  session_destroy();
  header("Location: ./");
}
?>