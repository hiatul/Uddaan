<?php

$con = new mysqli("localhost","varunk_13","12345","Uddaan");
//$con = new mysqli("localhost","root","","Udaan");

if($con->connect_error)
    {
    
    die("Connection failed:" . $con->connect_error);
    
    }

    else
    {
        $NgoName;
        $email=$_POST["email"];
        $pass=$_POST["password"];

        $cammand="select * from Ngo where Email='$email' and Password='$pass'";
        $mm=$con->query($cammand);

        if($data=$mm->fetch_assoc())
        {
            $NgoName=$data['NgoName'];
        }
        
        
        $cammand2="select * from Ngo where ";
        
    }