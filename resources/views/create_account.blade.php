@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="silver" text="white">
<table border='0' celspacing='0' cellpadding='0' bgcolor='black' width='100%' style="background-color:black;border-radius:10PX;">
<tr><td align='center'><h1>Outside Students Management System</h1></td></tr>
</table><br><br>

<form action="{{ route('accounts.store') }}" method="POST">

<center>

	<fieldset style="width: 30%;background-color: black; text-align: center;">
<legend align="center"><b><h3>Create_Account</h3></b></legend>
<br>
	<input type="text" name="username" placeholder="Enter Registration_Number As User_Name" required style="width: 75%; text-align: center;">
	<br><br>

	<input type="password" name="password" placeholder="PassWord" required style="width: 75%; text-align: center;">
	<br><br>

		<input type="text" name="title" placeholder="Student" value="student" readonly="student" required style="width: 75%; text-align: center;">
		<br><br>


		<button type="submit" style="width: 25%;">SignUp</button>&nbsp;&nbsp;
		<button type="reset" style="width: 25%;" style="background-color: red;">
		<a href='/' style="text-decoration: none;" target="_parent">Close</a></button>

	</fieldset>
	<table height="20px" width="33%" bgcolor="black" style="border-radius: 0px 5px 5px 0px;"><tr><td>ComeON!-------------------------------------------------------->?</td></tr></table>

</center>
</form>
</body>
</html>
@endsection