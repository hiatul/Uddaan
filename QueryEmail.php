<?php



 $Email=$_POST["Email"];
 $Name=$_POST["Name"];
 $Message=$_POST["Message"]; 


 
        /* Always set content-type when sending HTML email*/
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type:text/html;charset=iso-8859-1' . "\r\n";
        $headers.=$Email."\r\n";
        $to = "uddaan5s@gmail.com";
        $subject = "Query";
        $message ="<h3>".$Message."</h3>";
        
        mail($to,$subject,$message,$headers);
        
        header("location: contactus.php");
    

?>