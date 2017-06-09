<?php
require_once("modules/model/Program.php");
require_once("modules/Hitung.php");
require_once("modules/view/ViewProgram.php");
date_default_timezone_set("Australia/Perth");

$view = new ViewProgram($session['level'], $session['unit']);
?>
<div class='km'>
<?php 
$num = 1; // for program name prefix (1. Blablabla)
$codes = Program::getCodeByUnit($session['unit']);
// $codes = array("P1", "P2");
// echo json_encode($programs);
foreach($codes as $program){ // program is the code (e.g P1)
  $Q = "SELECT id FROM program WHERE kode = '$program'";
  $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  $rows = $mysqli->query($Q);
  $model_list = array();
  $i = 0;
  $hitung = new Hitung($view->count);
  while($row = $rows->fetch_array()){
    $model = Program::loadById($row['id']);
    $model->ytd = $hitung->hitungYtd($model);
    $model_list[$i] = $model;
    $i++;
  }

  $month = date('m', time()) - 1;
  $all_ytd = $hitung->hitungAllYtd($model_list, $month);

  $all_target = $hitung->hitungAllTgt($model_list);
  if($all_ytd != 0){
    $progress_all_ytd = round(($all_ytd/$all_target) * 100, 2);
  } else $progress_all_ytd = 0;

  if($model_list != null){
    if($model_list[0]->indikator != null && $model_list[0]->unit != null){
      $name = $model_list[0]->indikator;
      $unit = $model_list[0]->unit;
    } else {
      $name = "";
      $unit = "";
    }
  } else {
    $name = "";
    $unit = "";
  }

  echo "
  <div id='$program' class='row'>
    <div class='row'>
      <div class='col s9 title row'>
        <div class='col s12'>
          <h3>$num. $name</h3>
        </div>
        <div class='col s12'>
          <p class='italic'>Unit In Charge : $unit</p>
        </div>
      </div>
      <div class='col s3 row'>
        <div class='col s12 grey lighten-3 center-align'>
          <small>TREG7 Ytd </small>
          <h3>$progress_all_ytd %</h3>
        </div>";
?>
        <div class='input-field col s12'>
          <select id='tw'>
            <option value='' disabled>Pilih Bulan</option>
            <?php
            $view->setFilter("Bulan");
            ?>
          </select>
        </div>
<?php
  echo "
      </div>
    </div> ";
  echo "
    <div class='row card white z-depth-2 contain'>
        <div class='card-content black-text'>
          <table class='bordered'>";
  $view->setHeader();      
  echo "
          <tbody>";
  $table = $view->setTable();

  foreach($model_list as $m){
    $table->row($m);
    // echo json_encode($m->ytd);
  }
  $num++;
  echo "
            </tbody>
          </table>
        </div>
      </div>
    </div>";
}
?>
</div>