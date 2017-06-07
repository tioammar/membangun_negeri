<?php
class Hitung {

  protected $mysqli;
  protected $count;

  function __construct($count) {
    $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $this->count = $count; 
  }

  // public function hitung($model, $unit){ // passing level so we can check wether it has a sub level or not
  //   $ach_all = array();
  //   for($i = 1; $i <= $this->count; $i++){
  //     $real = $model->realisasi[$i];
  //     $target = $model->target[$i];
  //     if($target == 0){
  //       $ach_1 = 0;
  //     } else {
  //       if($model->type == TYPE_NORMAL){
  //         $ach_1 = $real/$target;
  //       } else {
  //         $ach_1 = $target/$real;
  //       }
  //     }
  //     $ach = array('ach_show' => $ach_1);
  //     $ach_all[$i] = $ach;
  //   }
  //   return $ach_all;
  // }

  public function hitungYtd($model){
    $array = array();
    for($i = 1;$i <= $this->count; $i++){
      $b = 1;
      $ytd = 0;
      while($b <= $i){
        $ytd = $model->realisasi[$b] + $ytd;
        $b++;
      }
      $array[$i] = $ytd;
    }
    return $array;
  }

  public function hitungAllYtd($ml, $i){
    $ytd = 0;
    foreach($ml as $m){
      $ytd = $m->ytd[$i] + $ytd;
    }
    return $ytd;
  }

  public function hitungAllTgt($ml){
    $tgt = 0;
    foreach($ml as $m){
      $tgt = $m->target + $tgt;
    }
    return $tgt;
  }
}
?>