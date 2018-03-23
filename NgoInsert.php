<?php
$con = new mysqli("localhost","varunk_13","12345","Uddaan");
//$con = new mysqli("localhost","root","","Udaan");

if($con->connect_error)
    {
    
    die("Connection failed:" . $con->connect_error);
    
    }

    else
    {
        $Name=$_GET["UserName"];
        $NgoName=$_GET["NgoName"];
        $Email=$_GET["Email"];
        $Address=$_GET["Address"];
        $City=$_GET["City"];
        $State=$_GET["State"];
        $ZipCode=$_GET["ZipCode"];
        $Country=$_GET["Country"];
        $Password=$_GET["Repassword"];
        $Phone=$_GET["Phone"];
        
        $command="INSERT INTO Ngo(NgoName,Name,Email,Address,City,State,ZipCode,Country,Password,Phone) VALUES('$NgoName','$Name','$Email','$Address','$City','$State','$ZipCode','$Country','$Password','$Phone')";
      if($con->query($command)=="TRUE")
      {
          //echo 'helloo';
          //("location: www.uddaan.in/Udaan/ThankforRegister.php?remarks=success");
          header("Location:ThankforRegister.php");
      }
      else{
         // echo 'error';
          
      }
//    echo 'helloo';
//    echo"$NgoName  $Name  $Email  $Address  $City  $State  $ZipCode  $Country  $Password  $Phone";
    }

?>
