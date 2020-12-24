<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "business";   // Name of the database


$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
	die("Connection Failed:" .mysqli_connect_error());
}

if(isset($_POST['save']))//POST method is used for sending the values
{
	//here the paranthesis of POST should contain the variable name exactly equal to the one mentioned in html file
	$sn=$_POST['stname'];
    $usno=$_POST['usn'];
    $state=$_POST['r1'];
    $cname=$_POST['r2'];
    $scr=$_POST['score'];
	
	$sql_query="INSERT INTO students(name,usn,status,website,score)
	VALUES ('$sn','$usno','$state','$cname','$scr')";
	
	if(mysqli_query($conn,$sql_query))
	{
		echo"New Details Inserted Successfully !";// This message is displayed if the data is inserted successfully
	}
	else
	{
		echo"Error: " . $sql. "" .mysqli_error($conn);//If there is any error then the specific error is displayed
	}
	mysqli_close($conn);
}
?>
