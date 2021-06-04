<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body bgcolor="silver" text="white">
<table border='0' celspacing='0' cellpadding='0' bgcolor='black' width='100%' style="background-color:black;border-radius:10PX;">
<tr><td align='center'><h1>Outside Students Management System</h1></td></tr>
</table><br><br>

<form action="login" method="POST">
@csrf
<center>
<a href="/student_login" target="_parent"><h2>Student_Login</h2></a>
	<fieldset style="width: 30%; height: 200px; background-color: black;">

		<legend align="center"><b><h3>Admin LoginForm</h3></b></legend>
		<input type="text" name="username" placeholder="Enter UserName" required style="width: 75%; text-align: center;height: 20%;">
	<br><br>

	<input type="password" name="password" placeholder="Enter PassWord" required style="width: 75%; text-align: center;height: 20%;">
	<br><br>

		<button type="submit" style="width: 25%; height: 20%;">SignIn</button>&nbsp;&nbsp;
		<button type="reset" style="width: 25%;" style="background-color: red;">
	Reset</button>

	</fieldset>
	<table height="20px" width="33%" bgcolor="black" style="border-radius: 0px 5px 5px 0px;"><tr><td>ComeON!--------------------------------------------------------->?</td></tr></table>

	</fieldset>

</center>
</form>
</body>
</html>