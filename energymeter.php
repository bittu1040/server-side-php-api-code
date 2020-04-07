
<?php

$servername="localhost";
$username="root";
$password="";
$dbName="test";

$n1=$n2=$n3=$n4=$id='';
function insert($db_name,$table_name,$table_data,$table_value)
{
	
	$conn=mysqli_connect('localhost','root','',$db_name);
	$sql = "INSERT INTO $table_name ($table_data)
VALUES ($table_value);";
	
	if (mysqli_query($conn, $sql)) {
    $res= "New record created successfully";
	//echo  "ok";
		return 1;
} else {
   $res= "Error: " . $sql . "<br>" . mysqli_error($conn);
		return 0;
}

mysqli_close($conn);

}
	

	
		
		if ($_SERVER["REQUEST_METHOD"] == "GET") 
{
		$db='test';
		$tb='energymeter';
		
		
		$id=$_GET['id'];
		$n1=$_GET['voltage'];
		$n2=$_GET['current'];
		$n3=$_GET['power'];
		$n4=$_GET['energy'];
		$n5=$_GET['time'];
		
            $query="SELECT * FROM user where id like '$id'";
            $conn=new mysqli($servername,$username,$password,$dbName);
            $result=$conn->query($query);
            $row = mysqli_fetch_assoc($result);
            $td='id,voltage,current,power,energy,time';
            $tv="'$id','$n1','$n2','$n3','$n4','$n5'";
            
         if($row==0)   
         {	
               insert($db,$tb,$td,$tv);
         }
        else
        {
                $sql = "UPDATE $tb SET id='$id',voltage='$n1',current='$n2',power='$n3',energy='$n4' WHERE id='$id'";
                $conn=new mysqli($servername,$username,$password,$dbName);
                $result=$conn->query($sql);
        }
}


	?>

