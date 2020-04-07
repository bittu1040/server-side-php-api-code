<?php

$con = mysqli_connect("localhost","root","","test");

$res = mysqli_query($con,"select * from ledstatus");

$data = mysqli_fetch_array($res);

echo json_encode(Array("led1"=>$data[0],"led2"=>$data[1],"led3"=>$data[2],"led4"=>$data[3]));

?>