



<?php

$servername="localhost";
$username="root";
$password="";
$dbName="test";

$n1=$n2=$id='';
function insert($db_name,$table_name,$table_data,$table_value)
{
	
	$conn=mysqli_connect('localhost','root','',$db_name);
	$sql = "INSERT INTO $table_name ($table_data)
VALUES ($table_value);";
	
	if (mysqli_query($conn, $sql)) {
   echo $res= "New record created successfully";
		return 1;
} else {
   echo $res= "Error: " . $sql . "<br>" . mysqli_error($conn);
		return 0;
}

mysqli_close($conn);

}
	

	
		
		if ($_SERVER["REQUEST_METHOD"] == "GET") 
{
		$db='test';
		$tb='dht';
		
		
		$id=$_GET['id'];
		$n1=$_GET['temp'];
		$n2=$_GET['hum'];
		
            $query="SELECT * FROM user where id like '$id'";
            $conn=new mysqli($servername,$username,$password,$dbName);
			//$conn=new mysqli($servername,$username,$password,$db);
            $result=$conn->query($query);
            $row = mysqli_fetch_assoc($result);
            $td='id,temp,hum';
            $tv="'$id','$n1','$n2'";
            
         if($row==0)   
         {	
               insert($db,$tb,$td,$tv);
         }
        else
        {
                $sql = "UPDATE $tb SET id='$id',temp='$n1',hum='$n2' WHERE id='$id'";
                $conn=new mysqli($servername,$username,$password,$dbName);
                $result=$conn->query($sql);
        }
}



/*
//<!--http://localhost/testing/send.php?name=Amit&name1=amit1998@gmail.com&name2=gvgv-->
//<!--http://localhost/testing/send.php?id=8&name=rohan&name1=amit1998@gmail.com&name2=vygbhb%20hbgh-->
*/
	?>

