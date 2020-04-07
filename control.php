<html>

<?php

if (isset($_GET['led']) && isset($_GET['status'])) {

$led=$_GET['led'];

$status=$_GET['status'];

$con = mysqli_connect("localhost","root","","test");

if($led==1)

$res=mysqli_query($con,"update ledstatus set led1 = $status");

else if($led==2)

$res=mysqli_query($con,"update ledstatus set led2 = $status");

else if($led==3)

$res=mysqli_query($con,"update ledstatus set led3 = $status");

else if($led==4)

$res=mysqli_query($con,"update ledstatus set led4 = $status");

}

?>

<p>LED1 : <a href='http://localhost/testing/control.php?led=1&status=1'>ON</a> <a href='http://localhost/testing/control.php?led=1&status=0'>OFF</a></p>

<p>LED2 : <a href='http://localhost/testing/control.php?led=2&status=1'>ON</a> <a href='http://localhost/testing/control.php?led=2&status=0'>OFF</a></p>

<p>LED3 : <a href='http://localhost/testing/control.php?led=3&status=1'>ON</a> <a href='http://localhost/testing/control.php?led=3&status=0'>OFF</a></p>

<p>LED4 : <a href='http://localhost/testing/control.php?led=4&status=1'>ON</a> <a href='http://localhost/testing/control.php?led=4&status=0'>OFF</a></p>

</html>