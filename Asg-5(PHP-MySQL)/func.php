<?php
$conn=mysqli_connect("localhost","root","","stud");
	if(isset($_POST['Insert']))
	{
	$Id=$_POST['Id'];
	$Name=$_POST['Name'];
	$Percentage=$_POST['Percentage'];

	$query="insert into stud_data values('$Id','$Name','$Percentage')";
	$result=mysqli_query($conn,$query);
	if($result)
	{
	echo"<script>alert('Insert Successfully')</script>";
	echo"<script>window.open('home.php','_self');</script>";
	}
	}

	if(isset($_POST['Delete']))
	{
		$Del_Id=$_POST['Id'];

	$query="delete from stud_data where Id='$Del_Id'";
	$result=mysqli_query($conn,$query);
	if($result)
	{
	echo"<script>alert('data is delete')</script>";
	echo"<script>window.open('home.php','_self');</script>";
	}
	}
	if(isset($_POST['Update']))
	{
		$Id=$_POST['Id'];
		$Name=$_POST['Name'];
		$Percentage=$_POST['Percentage'];
		
		$query="update stud_data set Name='$Name',Percentage='$Percentage' where Id='$Id'";

		$result=mysqli_query($conn,$query);
		if($result)
		{
			echo"<script>alert('data is update')</script>";
			echo"<script>window.open('home.php','_self');</script>";
		}
		
	}
	

function get_data()
{
	global $conn;
	$query="select * from stud_data order by Percentage desc";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($result))
	{
		$Id=$row['Id'];
		$Name=$row['Name'];
		$Percentage=$row['Percentage'];

	echo"<tr>
		<td>$Id</td>
		<td>$Name</td>
		<td>$Percentage</td>
	</tr>";
		
	}
}

?>