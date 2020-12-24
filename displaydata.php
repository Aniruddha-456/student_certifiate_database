<html>
<head>
<title>Display Records </title><!--This is the title-->
</head>

<body>
<table border="3">
<!-- These are the column names-->
<tr>
<th>Name</th>
<th>USN</th>
<th>Status</th>
<th>Website</th>
<th>Score</th>
</tr>


<?php

include("three.php");//Here the php file which is used for establishing connection is included
error_reporting(0);
$query="select * from students ";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);


if($total!=0)
{
	//To display whatever is present in the table of the database
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['name']."</td>
		<td>".$result['usn']."</td>
		<td>".$result['status']."</td>
		<td>".$result['website']."</td>
	    <td>".$result['score']."</td>
		</tr>
		";
	}
}
else
{
	//if there is some error then the following message is displayed
	echo"No records found";
}
?>

</table>
</body>
</html>