<?php
$message_sent=false;
if(isset($_POST['email']) && ($_POST['email'] != ' ')){

  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

            $ime=$_POST['name'];
            $messageSubject=$_POST['subject'];
            $email=$_POST['email'];
            $poruka=$_POST['poruka'];
            
            $to="blah@blah.com";
            $body="";
            
            $body .="Od: ".$ime. "\r\n";
            $body .="Email: ".$email. "\r\n";
            $body .="Poruka: ".$poruka. "\r\n";
            
            //mail($to,$messageSubject,$body);
            $message_sent=true;
  
  }
  else{
    $message_sent=false;
  }

  }

?>