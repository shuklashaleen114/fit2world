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
	$Feedback=$_POST['feedback'];


echo $sql= "INSERT INTO contact(`Name`, `Surname`, `Mobile`, `Address`, `DOB`, `Gender`,`Feedback`) 
	VALUES ('$Name','$Surname','$Mobile','$Address','$DOB','$Gender','$Feedback')";

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

