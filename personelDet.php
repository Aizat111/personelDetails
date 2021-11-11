<!DOCTYPE html>
<html>
<head>
<title>Personel Details</title>
<style>
table,tr,td {
  border:2px solid red;
}
h2{
color:red;
}
body{
background-color:#C0C0C0;
}
</style>
</head>

<body>
<div>

<form align="center" method="post" action="personelDet.php" >
<h3 style="color:white">Personel Details</h3>
<label for="name_">Name:</label> <input type="text" name="name_" required> <br><br>
<label for="password_">Password:</label><input type="password" name="password_" required><br><br>
<label for="email_">E-mail:</label><input type="email" name="email_" required><br><br>
<label for="gender_">Gender:</label> <input type="radio" name="gender_" value="male" > Male
	<input type="radio" name="gender_" value="female"> Female<br><br>
<label for="phone_">Telephone Num:</label> <input type="tel" name="phone_" placeholder="123-456-78-90" 
pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" required><br><br>
<h3 style="color:white">Educational Qualification</h3>
<label for="degree">Degree: </label><select name="degree" >
<option selected>--Select Group--</option>
<option>B.com</option>
<option>B.sc</option>
<option>B.com Computers</option>
<option>B.A</option>
</select><br><br>
<label for="engineering">Engineering: </label>
<select name=eng>
<option selected>--Select Group--</option>
<option>CSE</option>
<option>ECE</option>
<option>CIVIL</option>
<option>EEE</option>
</select><br><br>
<label for="hobbies">Hobbies: </label>
<input type="checkbox" name="chess"> Playing Chess
<input type="checkbox" name="books"> Reading Books
<input type="checkbox" name="other"> Other
<br><br>
<h3 style="color:white">Address</h3>
<textarea name="address_ " rows="5" cols="50"></textarea>
<br><br>
<input type="submit" name="submit_">
</form>
</div>


</body>
</html>