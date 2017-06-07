<ul class='tabs tabs-transparent'>
<?php
require_once("modules/model/Program.php");
$i = 0;
$codes = Program::getCodeByUnit($session['unit']);
foreach($codes as $program){
  if($i == 0){
    echo "<li class='tab col s3'><a class='active' href='#$program'>$program</a></li>";
  } else {
    echo "<li class='tab col s3'><a href='#$program'>$program</a></li>";
  }
  $i++;
}
?>
</ul>