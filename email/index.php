<?php
 if(isset($_POST['submit']))
 {
    $name = $_POST['name'];
	$email = $_POST['email'];
	$query = $_POST['message'];
	$email_from = $name.'<'.$email.'>';

 $to="julien_guerrin@yahoo.fr";
 $subject="Taoupats!";
 $headers  = 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $headers .= "From: ".$email_from."\r\n";
 $message="	  
 	   
 		 Nom:
		 $name 	   
         <br>
 		 Email:
		 $email 	   
         <br>
 		 Message:
		 $query 	   
      
   ";
	if(mail($to,$subject,$message,$headers))
		header("Location:../contact.php?msg=Message envoye.");
	else
		header("Location:../contact.php?msg=Erreur lors de l'envoi du mail !");
		//contact:-your-email@your-domain.com
 }
?>
