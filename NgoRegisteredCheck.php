<?php

$con = new mysqli("localhost","varunk_13","12345","Uddaan");
//$con = new mysqli("localhost","root","","Udaan");

if($con->connect_error)
    {
    
    die("Connection failed:" . $con->connect_error);
    
    }

    else
    {
        $name=$_GET["NgoName"];
        $email=$_GET["Email"];
       
        $cammand="select * from Ngo where NgoName='$name' or Email='$email'";
        
        $mm=$con->query($cammand);

        if($data=$mm->fetch_assoc())
        {
            ?>Ngo Already Exist<?php
        
        }
        
        else
        {
            ?><?php
        }
        
        
    }
?>

