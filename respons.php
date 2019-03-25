<?php 
session_start();
$from_time1=date('Y-m-d H:i:s');
$to_time1=$_SESSION["end_time"];

echo $timefirst=strtotime($from_time1);echo '<br>';
echo $timesecond=strtotime($to_time1);echo '<br>';
echo $differenceinseconds=$timesecond-$timefirst;echo '<br>';
echo gmdate("H:i:s",$differenceinseconds);
?>