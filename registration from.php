<DOCTYPE html>
<html>
<head><title>Registration Form</title>
</head>
<body>
<h1>Registration Form</h1>
<form>
<fieldset>
<legend>Basic Information</legend>

Enter Your First Name:<input type="text" name="textbox1"> <br> <br>
Enter Your Last Name:<input type="text" name="textbox2"> <br> <br>
Gender:
<input type="radio" name="gender" value="Male">Male 
<input type="radio" name="gender" value="Female">Female
<br><br>

Date of Birth:<input type="date" name="DOB"> <br><br>

<label for="Religion">Choose a Religion:</label></td>
<select name="Religion" id="Religion">
<option value="Religion">Religion</option>
  <option value="Islam">Islam</option>
  <option value="Christianity">Christianity</option>
  <option value="Buddhism">Buddhism</option>
  <option value="Hinduism">Hinduism</option>
</select><br><br>
</fieldset><br>
<fieldset>
<legend>Contact Information</legend>
Present Address:<textarea rows="3" cols="20"></textarea>  <br> <br><br>
Permannent Address:<textarea rows="3" cols="20"></textarea>  <br> <br><br>

Phone Number:<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br> <br>
Email:<input type="email" name="email"> <br> <br>

<a href="http://localhost/Mycode/personal_info.php" target="_blank">Personal Website Link</a>

</fieldset>



<fieldset>
<legend>Academic Information</legend>
</fieldset><br><br>
<input type="Submit" value="Submit">
       
 

 </form>
 </body>
 </html>


