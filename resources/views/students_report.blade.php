<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<table width="80%" border="1" cellspacing="0" cellpadding="0">
<tr><th>teacher_id</th> 
<th>fname </th> 
<th>lname </th> 
<th>gender </th> 
<th>idno </th> 
<th>dob </th> 
<th>phone </th> 
<th>degree </th> 
<th>experience </th> 
<td>option </th> 
<th>title </th> 
<th>status</th><th>Modify</th><th>Remove</th> </tr> 
<?php
$conn=mysqli_connect("localhost","root","","teacher_management")or die("not connected");
$sel=mysqli_query($conn,"select *from teachers")or die("not selected");
while($get=mysqli_fetch_array($sel))
{
	$teacher_id=$get["teacher_id"];
	$fname=$get["fname"];
	$lname=$get["lname"];
	$gender=$get["gender"];
	$idno=$get["idno"];
	$dob=$get["dob"];
	$phone=$get["phone"];
	$degree=$get["degree"];
	$experience=$get["experience"];
	$option=$get["option"];
	$title=$get["title"];
	$status=$get["status"];
echo"<tr>
<td>$teacher_id</td> 
<td>$fname </td> 
<td>$lname </td> 
<td>$gender </td> 
<td>$idno </td> 
<td>$dob </td> 
<td>$phone </td> 
<td>$degree </td> 
<td>$experience </td> 
<td>$option </td> 
<td>$title </td> 
<td>$status</td><td><button type='submit' style='width:100%'>Update</button></td><td><button type='submit' style='width:100%'>Delete</button></td> </tphp art}
?>

</table>
</center>
</body>
</html>
