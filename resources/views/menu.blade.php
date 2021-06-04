<!DOCTYPE html>
<html>
<head>
<title></title>
</head>

<body bgcolor="black" text="white">
<center>
<table width="60%" height="400px" cellpadding="0" cellspacing="0" border="1">
<tr bgcolor="gray" height="80px"><th><h3>Menus</h3></th></tr>

<tr><th><a href="{{ route('students.create') }}" target="col2" style="text-decoration: none; color: white;">Register_Student</a></th></tr>
<tr><th><a href="{{ route('students.index') }}" target="_parent" style="text-decoration: none; color: white;">All_Students'_List</a></th></tr>
<tr><th><a href="{{ route('permissions.index') }}" target="_parent" style="text-decoration: none; color: white;">OutSide_Students'_List</a></th></tr>

<tr><th><a href="{{ route('accounts.index') }}" target="_parent" style="text-decoration: none; color: white;">OutSide_Students'_Accounts</a></th></tr>
<tr><th><a href="logout" target="_parent" style="text-decoration: none; color: white;">SignOut</a></th></tr>

</table>
</center>
</body>
</html>