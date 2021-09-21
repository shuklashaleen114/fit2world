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
	$Surname=$_POST['Surname'];
	$Mobile=$_POST['Mobile'];
	$Address=$_POST['Address'];
	$DOB=$_POST['birthday'];
	$Gender=$_POST['Gen'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];


	if($password==$cpassword)
	{
		echo "<br>";
		echo $sql= "INSERT INTO register (Name, Surname, Mobile,Address, DOB, Gender,Password) 
	VALUES ('$Name','$Surname','$Mobile','$Address','$DOB','$Gender','$password')";

	}
	else
	{
		echo "<br>";
		echo "Password doesn't matched";
	}

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

