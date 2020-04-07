<html>

<?php

if (isset($_GET['led']) && isset($_GET['status'])) {

$led=$_GET['led'];

$status=$_GET['status'];

$con = mysqli_connect("localhost","root","","test");

if($led==1)

$res=mysqli_query($con,"update multiledstatus set led1 = $status");

else if($led==2)

$res=mysqli_query($con,"update multiledstatus set led2 = $status");

else if($led==3)

$res=mysqli_query($con,"update multiledstatus set led3 = $status");

else if($led==4)

$res=mysqli_query($con,"update multiledstatus set led4 = $status");

else if($led==5)

$res=mysqli_query($con,"update multiledstatus set plug1 = $status");

else if($led==6)

$res=mysqli_query($con,"update multiledstatus set plug2 = $status");

}

?>

<P>DEVICE 1 : <a href='http://localhost/testing/multiplecontrol.php?led=1&status=1'>ON</a> <a href='http://localhost/testing/multiplecontrol.php?led=1&status=0'>OFF</a></p>

<p>DEVICE 2 : <a href='http://localhost/testing/multiplecontrol.php?led=2&status=1'>ON</a> <a href='http://localhost/testing/multiplecontrol.php?led=2&status=0'>OFF</a></p>

<p>DEVICE 3 : <a href='http://localhost/testing/multiplecontrol.php?led=3&status=1'>ON</a> <a href='http://localhost/testing/multiplecontrol.php?led=3&status=0'>OFF</a></p>

<p>DEVICE 4 : <a href='http://localhost/testing/multiplecontrol.php?led=4&status=1'>ON</a> <a href='http://localhost/testing/multiplecontrol.php?led=4&status=0'>OFF</a></p>

<p>PLUG 1   : <a href='http://localhost/testing/multiplecontrol.php?led=5&status=1'>ON</a> <a href='http://localhost/testing/multiplecontrol.php?led=5&status=0'>OFF</a></p>

<p>PLUG 2   : <a href='http://localhost/testing/multiplecontrol.php?led=6&status=1'>ON</a> <a href='http://localhost/testing/multiplecontrol.php?led=6&status=0'>OFF</a></p>

</html>