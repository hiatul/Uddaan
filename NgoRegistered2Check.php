<?php

$con = new mysqli("localhost","varunk_13","12345","Uddaan");
//$con = new mysqli("localhost","root","","Udaan");

if($con->connect_error)
    {
    
    die("Connection failed:" . $con->connect_error);
    
    }

    else
    {
        $Email=$_GET["Email"];
        $cammand="select * from Ngo where Email='$Email'";
        
        $mm=$con->query($cammand);

        if($data=$mm->fetch_assoc())
        {
            ?><?php
        }
        
        else
        {
            ?>Invalid User<?php
        }
        
        
    }
?>

