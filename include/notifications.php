<?php

require_once("modules/model/Notification.php");

$dest = $session['level'];
$unit = $session['unit'];

$notification = new Notification($unit, "program");
$ids = $notification->getAll($dest);
?>

  <div id='main' class='row'>
    <div class='row card white z-depth-2 contain'>
        <div class='card-content black-text'>
          <table class='bordered'>
          <thead>
            <tr class='black white-text center-align'>
              <td class='center-align'>No.</td>
              <td class='center-align'>Program</td>
              <td class='center-align'>Unit</td>
              <td class='center-align'>Pesan</td>
              <td class='center-align'>Action</td>
            </tr>
          </thead>
          <tbody>
<?php
$i = 0;
switch($session['level']){
  case ADMIN_UNIT:
    $link = "admin";
    break;
  case ADMIN_SM:
    $link = "adminsm";
    break;
  case ADMIN_ALL:
    $link = "adminall";
    break;
  default:
}
foreach($ids as $id){
  $num = $i + 1;
  $notif = $notification->get($id);
  echo "
            <tr>
              <td class='center-align'>$num.</td>
              <td><a href='?page=$link'>".$notif->event."</td>
              <td class='center-align'>".$notif->unit."</td>
              <td class='center-align'>".$notif->message."</td>
              <td class='center-align'>
                <a class='green-text' href='data.php?deletenotif&id=$id'>
                  <i class='small material-icons'>done</i>
                </a>
              </td>
        ";
  $i++;
}
?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

