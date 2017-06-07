<?php
  if(isset($session['nik'])){
    header("Location:./?page=main");
  }
?>
<div class='card login'>
  <div class='center-align'><img src='img/woow-2.png' class='login-logo center-align'></div>
  <form action='data.php?login' method='post'>
    <input id='nik' type='text' name='nik'  placeholder='NIK'>
    <input id='password' type='password' name='password'  placeholder='Password' autocomplete='new-password'>
  <?php
  if(isset($_GET['status'])){
    switch($_GET['status']){
      case NOT_REGISTERED:
        $message = "NIK Anda Tidak Terdaftar";
        break;
      case WRONG_PASSWORD:
        $message = "Password Yang Anda Masukkan Salah";
        break;
      case NOT_CONNECTED:
        $message = "Tidak Dapat Terkoneksi Ke Server Telkom";
        break;
    }
    echo "
    <div class='chip'>
      $message
    </div>";
  }
  ?>
    <button type='submit' class='btn grey darken-3 right'>Masuk</button>
  </form>
</div>