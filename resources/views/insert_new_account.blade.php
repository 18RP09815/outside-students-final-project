
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<table width="80%" border="1" cellspacing="0" cellpadding="0">
<tr><th>User_id</th> 
<th>Username </th> 
<th>title</th> 
<th>Modify</th><th>Remove</th> </tr> 
<?php
$conn=Mysqli_connect("localhost","root","","outside_students_management_system") or die("not connected");
$un="$_POST['username']";
$user=new username;

$sel=mysqli_query($conn,"select *from  users_tbls where user_name='$un'")or die("not selected");
while($get=mysqli_fetch_array($sel))
{
	$u_id=$get["user_id"];
	$uname=$get["user_name"];
	$tt=$get["title"];

    echo"$uname";
    echo"$u_id";
    echo"$tt";
    echo"<tr>
<td>$u_id</td> 
<td>$uname </td> 
<td>$tt</td> 
<td><button type='submit' style='width:100%'>Update</button></td><td><button type='submit' style='width:100%'>Delete</button></td> </tr>";

}



?>