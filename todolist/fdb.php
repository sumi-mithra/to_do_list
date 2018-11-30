<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php
include('db.php');
$username=($_POST['fusername']);
$mailid=($_POST['fmailid']);
$password="";

$sql = "SELECT password FROM `signin` WHERE mailid='$mailid' and username='$username'";


//$sql="SELECT username,password FROM signin WHERE username='$username' AND mailid='$mailid'";
$result=mysqli_query($conn,$sql)or die(mysqli_error());

			$dbun=""; 
			$dbps="";

		while($f=mysqli_fetch_array($result))
		{
		
			$dbps=$f["password"];
			echo "check your mail";
			//include('login.php');
			echo "$dbps";
			$name="priya";
require 'PHPMailer-5.2.24/PHPMailerAutoload.php';

$mail = new PHPMailer;   // Passing `true` enables exceptions                              // Enable verbose debug output
   
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com' ;  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = ' ';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('adminmailid', 'note');
    $mail->addAddress(r'admin mailid, ''); 
    // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);    

                              // Set email format to HTML
    $mail->Subject = 'password';
    $mail->Body    =	"$name";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send())
    {
echo 'mail not sent.';
echo 'error:' . $mail->ErrorInfo;
}
else{
    echo 'Message sent.';
}
			
		}
		
		

		/*
		if( $password==$dbps)
		{
		echo "hello! ";
		echo $password;
		}
		else
		echo "sorry";
		*/
		
// Close connection
mysqli_close($conn);
?>
</body>
</html>
