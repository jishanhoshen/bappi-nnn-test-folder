<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"test");
$duration="";
$res=mysqli_query($link,"select * from time");
while($row=mysqli_fetch_array($res))
{
$duration=$row["duration"];
}

$start=date('Y-m-d H:i:s');echo '<br>';
$end_time= date('Y-m-d H:i:s', strtotime('+'.$duration.'minutes', strtotime($start)));

$from_time1=date('Y-m-d H:i:s');
$to_time1=$end_time;

echo $timefirst=strtotime($from_time1);echo '<br>';
echo $timesecond=strtotime($to_time1);echo '<br>';
echo $differenceinseconds=$timesecond-$timefirst;
echo gmdate("H:i:s",$differenceinseconds);
?>