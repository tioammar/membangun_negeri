<?php
require_once(__DIR__."/../config.php");

class TableView {

  protected $view;
  protected $useEvid;

  function __construct($view){
    $this->view = $view;
  }

  public function showEditor($model, $t, $stt){
    $editor_stt = "";
    $approved_stt = "disabled";
    $rejected_stt = "disabled";
    $released_stt = "disabled";
    $notreleased_stt = "disabled";

    if($stt == STATUS_EDITED){
      $approved_stt = ""; // enable all button
      $rejected_stt = "";
    } else if($stt == STATUS_APPROVED){
      $rejected_stt = ""; // disable approved button
      $released_stt = "";
      $notreleased_stt = "";
      $editor_stt = "disabled";
    } else if($stt == STATUS_REJECTED){
      $approved_stt = ""; // disable rejected button
      $editor_stt = "";
    } else if($stt == STATUS_RELEASED){
      $notreleased_stt = "";
      $editor_stt = "disabled";
    } else if($stt == STATUS_NOT_RELEASED){
      $released_stt = "";
    }

    $editor = "";
    if($this->view->user != USER){
      switch($this->view->user){
        case ADMIN_UNIT:
          $editor = "<a class='$editor_stt btn-floating btn-small modal-trigger blue darken-3' data-id='$model->id' data-count='$t'>
                      <i class='small material-icons'>edit</i>
                    </a>";
          break;
        case ADMIN_SM:
          $editor = "<a class='$approved_stt btn-floating btn-small green' href='data.php?".$this->view->statusType."&stt=".STATUS_APPROVED."&id=$model->id&t=$t'>
                      <i class='small material-icons'>done</i>
                    </a> 
                    <!--a class='$rejected_stt btn-floating btn-small red darken-3' href='data.php?".$this->view->statusType."&stt=".STATUS_REJECTED."&id=$model->id&t=$t'>
                      <i class='small material-icons'>close</i>
                    </a-->
                    <a class='$rejected_stt btn-floating modal-trigger-reject btn-small red darken-3' data-id='$model->id' data-count='$t'>
                      <i class='small material-icons'>close</i>
                    </a>";    
          break;    
        case ADMIN_ALL:
          $editor = "<a class='$released_stt btn-floating btn-small green' href='data.php?".$this->view->statusType."&stt=".STATUS_RELEASED."&id=$model->id&t=$t'>
                      <i class='small material-icons'>done</i>
                    </a> 
                    <a class='$notreleased_stt btn-floating btn-small red darken-3' href='data.php?".$this->view->statusType."&stt=".STATUS_NOT_RELEASED."&id=$model->id&t=$t'>
                      <i class='small material-icons'>close</i>
                    </a>";
          break;
      }
      echo $editor;
    }
  }

  public function row($model){
    echo "
          <tr class='$this->class'>
            <td class='indent-1'>$model->witel</td>
            <td class='center-align'>$model->tahun</td>
            <td class='center-align'>$model->satuan</td>
            <td class='center-align'>$model->target</td>";

      for($t = 1; $t <= $this->view->count; $t++){
        echo "
            <td class='hides center-align $t'>".$model->realisasi[$t]." ";
        if($this->useEvid && $model->realisasi[$t] != 0){
          echo "
              <a href='data.php?evid&id=$model->id&type=$model->table'>
                <i class='small material-icons'>description</i>
              </a>";
        }
        echo "
            </td>";

        if($this->view->user == ADMIN_UNIT){
          $this->editor($model->id, $t);
        }
        if($this->view->user == ADMIN_ALL || $this->view->user == ADMIN_SM){
          $this->rejEditor($model->id, $t);
        }

        if($model->ytd[$t] != 0){
          $progress = round(($model->ytd[$t]/$model->target) * 100, 2);
        } else $progress = 0;

        echo "
            <td class='hides center-align $t'>".$model->ytd[$t]."</td>
            <td class='hides center-align $t'>$progress %</td>"; // progress Ytd
        
        echo "
            <td class='hides center-align $t'>";
          $this->showEditor($model, $t, $model->status[$t]);
        echo " 
            </td>";
      }
      echo "    
          </tr>";
  }
}
?>