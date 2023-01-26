<?php

//if($_POST && isset($_FILES['file']))

//{

	$recipient_email 	= "sales@office24hours.com"; //recepient
	//$recipient_email 	= "rsmodi9990@gmail.com";// recepient
	//$recipient_email 	= "npweb110@gmail.com"; recepient

	$from_email 		= "info@office24hours.com"; //from email using site domain.

	$subject			= "Inquiry received from Website"; //email subject line



	$htmlContent = ' 

    <html>

<head>

<style>

table {

  font-family: arial, sans-serif;

  border-collapse: collapse;

  width: 100%;

}



td, th {

  border: 1px solid #dddddd;

  text-align: left;

  padding: 8px;

}



tr:nth-child(even) {

  background-color: #dddddd;

}

</style>

</head>

<body>



<table style="width:40%">

   

  <tr style="background-color: #dddddd;">

    <td width="20%"><b>Name</b></td>

    <td width="30%">'.filter_var($_POST["con_name"], FILTER_SANITIZE_STRING).'</td>

   

  </tr>

  

  <tr>

    <td><b>E-mail</b></td>

    <td>'.filter_var($_POST["con_email"], FILTER_SANITIZE_STRING).'</td>

    

  </tr>

 

   <tr style="background-color: #dddddd;">

    <td><b>Subject</b></td>

    <td>'.filter_var($_POST["con_subject"], FILTER_SANITIZE_STRING).'</td>

    

  </tr>

  

  <tr>

    <td><b>Message</b></td>

    <td>'.filter_var($_POST["con_message"], FILTER_SANITIZE_STRING).'</td>

    

  </tr>

</table>



</body>

</html>';



$headers[] = 'MIME-Version: 1.0';

$headers[] = 'Content-type: text/html; charset=iso-8859-1';


	//$msg="Name:".$_POST["name"]." \n E-mail:".$_POST["email"]." \n Phone No.:".$_POST["phone"]." \n Message:".$_POST["comment"];

	// $sender_name = filter_var($_POST["con_name"], FILTER_SANITIZE_STRING); //capture sender name
	// $sender_email = filter_var($_POST["con_email"], FILTER_SANITIZE_STRING); //capture sender email
	// $sender_subject = filter_var($_POST["con_subject"], FILTER_SANITIZE_STRING); //capture sender email
	// $sender_message = filter_var($_POST["con_message"], FILTER_SANITIZE_STRING); //capture message

//	$sender_phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING); //capture sender email

//	$sender_message = filter_var($htmlContent, FILTER_SANITIZE_STRING); //capture message

	

	

		

	

	 $sentMail = @mail($recipient_email, $subject, $htmlContent, implode("\r\n", $headers));

	if($sentMail) //output success or failure messages

	{ echo "
    console.log(window.location.href='thank-you.html');
   window.location.href='thank-you.html';
   "  ;  }else{

		die('Could not send mail! Please check your PHP mail configuration.');  

	}
//echo "window.alert('Message Successfully Sent...');";

//echo '<script> console.log(location.href = "https://office24hours.com/thank-you.html")</script>';
//header('Location:https://office24hours.com/thank-you.html');


//window.location.replace("thank-you.html");
//echo "window.location.reload();";	
	
	

//}

?>