<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php
include('db.php');



$username = mysqli_real_escape_string($conn, $_REQUEST['username']);
$mailid = mysqli_real_escape_string($conn, $_REQUEST['mailid']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);
$phn = mysqli_real_escape_string($conn, $_REQUEST['phn']);
 
// attempt insert query execution
$sqlin = "INSERT INTO note.signin (username,mailid,password,phn) VALUES ('$username','$mailid','$password','$phn')";
if(mysqli_query($conn, $sqlin))
{
		include('login.php');
    //echo "Records added successfully.";
} else{
    //echo "ERROR: Could not able to execute $sqlin. " . mysqli_error($conn);
}

$conn->close();
?>
</body>
</html>
