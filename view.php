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
	$Password=$_POST['password'];
	

	$sql= "SELECT * FROM register WHERE Name='$Name' AND Password='$Password'";

	

	$query=mysqli_query($connection,$sql);

	
	if($query)
	{
		
       echo "<br>";
       echo "Here is your data";
	   $r= mysqli_fetch_array($query);
	   if($r>0)
	   {
		   echo "<br>";
		   echo "<table border=1>";
		   echo "<tr>";
		   echo "<th>";
		   echo "Name";
		   echo "</th>";
		   echo "<th>";
		   echo "Surname";
		   echo "</th>";
		   echo "<th>";
		   echo "Mobile";
		   echo "</th>";
		   echo "<th>";
		   echo "Address";
		   echo "</th>";
		   echo "<th>";
		   echo "Date of Birth";
		   echo "</th>";
		   echo "<th>";
		   echo "Gender";
		   echo "</th>";
		   echo "</tr>";

		   echo "<tr>";
		   echo "<td>";
		   echo $r['Name'];
		   echo "</td>";
		   echo "<td>";
		   echo $r['Surname'];
		   echo "</td>";
		   echo "<td>";
		   echo $r['Mobile'];
		   echo "</td>";
		   echo "<td>";
		   echo $r['Address'];
		   echo "</td>";
		   echo "<td>";
		   echo $r['DOB'];
		   echo "</td>";
		   echo "<td>";
		   echo $r['Gender'];
		   echo "</td>";
		   echo "</tr>";
		   echo "</table>";

		  
	   }
	}
	else 
	{
        
        echo "<br>";
		echo "Error";	
        $sql=$connection->error_log("Error occured");
	}

	
}
?>

