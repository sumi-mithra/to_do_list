
<?php
include('db.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      //$username = mysqli_real_escape_string($conn,$_POST['username']);
      //$password = mysqli_real_escape_string($conn,$_POST['password']); 

$username=($_POST['username']);
$password=($_POST['password']);


$sql="SELECT username,password FROM signin WHERE username='$username' AND password='$password'";
$result=mysqli_query($conn,$sql)or die(mysqli_error());

			$dbun=""; 
			$dbps="";

		while($f=mysqli_fetch_array($result))
		{
			$dbun=$f["username"];
			$dbps=$f["password"];
		}

		if($dbun==$username && $password==$dbps)
		{
		echo "hello! ";
		echo $username;
		header("location:note.php"); 
		}
		else{
		echo "PLEASE! Signin  ";
		include('signin.php');
		}
}

// Close connection
mysqli_close($conn);
?>



<html>

<head>
<style>
.error {color: #FF0000;}
</style>

<link type="text/css" rel="stylesheet" href="ds&l.css"/>
</head>

<body bgcolor="#66CCFF">

<center>	
<br><br>

<h2 style="color:purple;">LOGIN</h2>	
<form method="post" action="" >
	Username:<input type="text" name="username" autocomplete="off"> <br>
	 password:<input type="password" name="password" ><br>
	 
	<p><b>  <a href="frgt.php">forget password?</a>   </b></p>
             <input type="submit" >
	<p><b><a href="signin.php" >Create an new account?</a></b></p>

	
</form>

</center>
</body>
</html>
