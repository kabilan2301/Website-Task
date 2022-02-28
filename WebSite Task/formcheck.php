<html>
<head>
<title>RegistrationForm</title>
<script type="text/javascript">
function validation()
{
 if(document.f1.name.value=="")
 {
  window.alert("Plz Enter Your Name");
  return false;
 }
 else if(document.f1.email.value=="")
 {
  window.alert("Plz Enter Your E-mail:");
  return false;
 }
 else if(document.f1.email.value.indexOf('@gmail.com')==-1)
 {
  window.alert("Plz Enter Your Valid E-mail");
  return false;
 }
 else if(document.f1.addr.value=="")
 {
  window.alert("Plz Enter Your Address");
  return false;
 }
 else if(document.f1.country.selectedIndex==0)
 {
  window.alert("Plz Select Your Country");
  return false;
 }
 else if((document.f1.rdo[0].checked==false)&&(document.f1.rdo[1].checked==false))
 {
  window.alert("Plz Choose Your Gender");
  return false;
 }
 else if((document.f1.chk[0].checked==false)&&(document.f1.chk[1].checked==false))
 {
  window.alert("Plz Select Your Qualification");
  return false;
 }
 else
 return true;
}
</script>
</head>
<body bgcolor="aqua" style="text-align: -webkit-right;">

<p style="">
</p><form name="f1" action="process_form.php" method="post" onsubmit="return validation()" style="font-size: xxx-large;text-align: revert;">
<fieldset style="">
<legend>Registration Form</legend>
<br>
<table border="1" style="
    height: 300px;
">
<tbody style="height: 200;"><tr>
<td>Name:</td>
<td style=""><input type="text" name="name" style="
    width: 500;
    height: -webkit-fill-available;" autocomplete="off"></td>
</tr>
<tr>
<td>E-mail:</td>
<td><input type="text" name="email" style="
    width: 500;
    height: -webkit-fill-available;" autocomplete="off"></td>
</tr>
<tr style="
">
<td>Address:</td>
<td><textarea name="address" rows="5" cols="180" style="
    height: -webkit-fill-available;
    width: 500;
"></textarea></td>
</tr>
<tr>
<td>Country:</td>
<td>
<select name="country" style="
    width: 500;
    height: -webkit-fill-available;
">
<option>---Select Your Country---</option>
<option>India</option>
<option>USA</option>
<option>AUS</option>
<option>UK</option>
</select>
</td>
</tr>
<tr>
<td>Gender:</td>
<td style="
    max-width: -webkit-fill-available;
">
<input type="radio" name="gender" value="Male">Male                                 
<input type="radio" name="gender" value="Female">Female
</td>
</tr>
<tr>
<td>Qualification:</td>
<td>
<input type="checkbox" name="qualification" value="B.E">B.E
<input type="checkbox" name="qualification" value="M.E">M.E
</td>
</tr>
</tbody></table>
<br>
<input type="submit" value="Register" style="border-radius:20px;">
</fieldset>
</form>
<p></p>




</body>
</html>
