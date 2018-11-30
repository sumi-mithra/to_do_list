<html>

<head>

<style>
.error
{
color: #FF0000;
}
</style>

<link type="text/css" rel="stylesheet" href="ds&l.css"/>
</head>
<body bgcolor="#66CCFF">
<center>	
<br><br>
         <h2 style="color:purple;">SIGN IN</h2>	
          
	 <form  name="myForm" method="post" action="signindb.php" >


	<label for="username">USERNAME:	 
	<input type="text" name="username" autocomplete="off" required>
	</label>
	<br>

    <label for="password"> PASSWORD : 
    <input type="password" name="password" pattern=".{4,}" title="max six characters" required></label><br>
	
	<label for="emailid">EMAIL-ID  : 
	<input type="text" name="mailid" onBlur="validateEmail(this)" autocomplete="off"/> </label><br>
		
    <label for="phn"> PHONE NO :<input  type="tel" name="phn" maxlength="10" title="error"></label><br>

             <input type="submit" /><br>
	

	&nbsp <b><a href="login.php">login</a></b>

</form>

</center>

<?php
//include("signindb.php");
//echo $username;
?>

<script type="text/javascript">
function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }

        return true;

}
/*

	
function phnnum()
{
var phoneno=/^\(?[0-9]{3})\?[-.]?([0-9]{3})[-.]?([0-9]{4})$/;
if(document.getElementById("id1").inputtxt.value.match(phoneno))
{
return true;
}
else
{
alert("not a valid phn num");
return false;
}
}
*/


   

</script>
</body>
</html>