<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body text="white">

<form action="register_student.php" method="POST">

<center>

	<fieldset style="width: 40%;background-color: black;">
<legend align="center"><b><h3>Declare_Outside_Permission</h3></b></legend>
<br>
	<input type="text" name="registration_number" placeholder="registration_number" required style="width: 75%; text-align: center;">
	<br><br>

	<input type="text" name="Landlord_Names" placeholder="Landlord_Names" required style="width: 75%; text-align: center;">
	<br><br>

		<input type="text" name="Landlord_Phone_Number" placeholder="Landlord_Phone_Number" required style="width: 75%; text-align: center;">
		<br><br>

		<input type="text" name="Landlord_ID_Number" placeholder="Landlord_ID_Number" required style="width: 75%; text-align: center;">
		<br><br>
         
         Gender:<input type="radio" name="Gender" value="Male" required>Male  
		<input type="radio" name="Gender" value="Female" required >Female<br><br>

		<input type="text" name="Current_Village" placeholder="Current_Village" required style="width: 75%; text-align: center;">
		<br><br>

		<input type="text" name="Current_Cell" placeholder="Current_Cell" required style="width: 75%; text-align: center;">
		<br><br>

		<input type="text" name="Current_Sector" placeholder="Current_Sector" required style="width: 75%; text-align: center;">
		<br><br>

		<label style="position: relative;left: -23.5%;">UploadContract:</label><input type="file" name="Contract" placeholder="Contract" required style="width: 76.5%; text-align: center;">
		<br><br>
        
		<button type="submit" style="width: 25%;">Declare</button>&nbsp;&nbsp;<button type="reset" style="width: 25%;">Cancel</button>

	</fieldset>

</center>
</form>
</body>
</html>