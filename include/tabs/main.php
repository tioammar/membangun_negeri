<ul class='tabs tabs-transparent'>
<?php
$i = 0; 
foreach($programs as $program){
  if($i == 0){
    echo "<li class='tab col s3'><a class='active' href='#$program'>$program</a></li>";
  } else {
    echo "<li class='tab col s3'><a href='#$program'>$program</a></li>";
  }
  $i++;
}
?>
</ul>