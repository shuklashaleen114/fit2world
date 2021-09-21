<?php 

if(isset($_POST['Name']))
{
	$server="localhost";
	$username="root";
	$password="";

	$connection=mysqli_connect($server,$username,$password,"fitness");

	if(!$connection)
	{
		die("Connection to the database is failed due to".mysqli_connect_error());
	}
	echo "Connected Successfully";

	$Name=$_POST['Name'];
	

	
		echo "<br>";
		echo $sql= "INSERT INTO std (Name) VALUES ('shaleen')";

	
	$query=mysqli_query($connection,$sql);

	if($query)
	{
		echo "<br>";
		echo "Data Inserted Successfully";
	}
	else 
	{
		echo "<br>";
        echo "Error: ";
        //$sql $connection->error_log("Error occured")
	}

}
?>

