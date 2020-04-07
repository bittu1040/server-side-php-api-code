<?php

$con = mysqli_connect("localhost","root","","test");

$res = mysqli_query($con,"select * from multiledstatus");

$data = mysqli_fetch_array($res);

echo json_encode(Array("led1"=>$data[0],"led2"=>$data[1],"led3"=>$data[2],"led4"=>$data[3],"plug1"=>$data[4],"plug2"=>$data[5]));

?>