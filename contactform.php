<?php
if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $subject =$_POST['subject'];
    $mailFrom=$_POST['mail'];
    $message =$_POST['message'];

  $mailTo="lailaibrahim798@gmail.com";
  $headers="FROM: ".$mailFrom;
  $txt = "You have Received an e-mail from ".$name.".\n\n".$message;

 if( mail($mailTo,$subject,$txt,$headers)){
 
   header("Location: index.php?emailsuccess");
 }else{
     header("Location: index.php?emailfailed");
 }






}