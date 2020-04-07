



<?php

$servername="localhost";
$username="root";
$password="";
$dbName="test";

$n=$n2=$n3=$id='';
function insert($db_name,$table_name,$table_data,$table_value)
{
	
	$conn=mysqli_connect('localhost','root','',$db_name);
	$sql = "INSERT INTO $table_name ($table_data) VALUES ($table_value);";
	
	if (mysqli_query($conn, $sql)) {
    $res= "New record created successfully";
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
		$tb='user';
		
		
		$n=$_GET['name'];
		$n1=$_GET['name1'];
		$n2=$_GET['name2'];
        $id=$_GET['id'];
        if($n=='bitu')
            {
                
                header('Location: http://www.google.com');
            }
			if($n=='manish')
            {
                
                header('Location: http://www.facebook.com');
            }
			
		
            $query="SELECT * FROM user where id like '$id'";
            $conn=new mysqli($servername,$username,$password,$dbName);
            $result=$conn->query($query);
            $row = mysqli_fetch_assoc($result);
            $td='name,name1,name2';
            $tv="'$n','$n1','$n2'";
            
         if($row==0)   
         {	
               insert($db,$tb,$td,$tv);
         }
        else
        {
                $sql = "UPDATE $tb SET name='$n',name1='$n1',name2='$n2' WHERE id='$id'";
                $conn=new mysqli($servername,$username,$password,$dbName);
                $result=$conn->query($sql);
        }
}



/*

//--http://localhost/testing/send.php?name=Amit&name1=amit1998@gmail.com&name2=gvgv-->
//--http://localhost/testing/send.php?id=8&name=rohan&name1=amit1998@gmail.com&name2=vygbhb%20hbgh-->
*/
	?>
