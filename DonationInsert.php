<?php

session_start();
$con = new mysqli("localhost","varunk_13","12345","Uddaan");
//$con = new mysqli("localhost","root","","Udaan");

if($con->connect_error)
    {
    
    die("Connection failed:" . $con->connect_error);
   
    }

    else
    {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
    
                $command1="Select * from Images where Type='Donationdoc'";
                $m=$con->query($command1);
                while($data=$m->fetch_assoc())
                {
                    
                    $count=$data['count'];
                    
                }
        
       $count++;
       $picname="pic".$count;
       $Name=$_POST['name'];
       $Email=$_POST['email'];
       $Address=$_POST['address'];
       $City=$_POST['city'];
       $State=$_POST['state'];
       $ZipCode=$_POST['zipcode'];
       $Country=$_POST['country'];
       $Phone=$_POST['phone'];
       $Item=$_POST['item'];
       $NgoName=$_POST['ngo'];
                       
                if(isset($_FILES["photo"]["error"])){
              
                    if($_FILES["photo"]["error"] > 0){
                     $_SESSION["error"]="Invalid File";
                     header("Location:donations.php");
                    } else{
                     $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                     $filename = $_FILES["photo"]["name"];
                     $filetype = $_FILES["photo"]["type"];
                     $filesize = $_FILES["photo"]["size"];

                     // Verify file extension
                     $ext = pathinfo($filename, PATHINFO_EXTENSION);
                     if(!array_key_exists($ext, $allowed)) {
                         $_SESSION["error"]="Please select a valid file format.";                     
                         header("Location:donations.php");

                     }
                     $DocPath="DonationUploadImage/".$picname.".".$ext;
                     
                     // Verify file size - 5MB maximum
                     $maxsize = 5 * 1024 * 1024;
                     if($filesize > $maxsize)
                     {
                         $_SESSION["error"]="File size is larger than the allowed limit.";
                         header("Location:donations.php");
                         
                     }
                     // Verify MYME type of the file
                     if(in_array($filetype, $allowed)){
                         // Check whether file exists before uploading it


                         if(file_exists("DonationUploadImage/" . $picname.".".$ext))
                        {
                             $_SESSION["error"]=$picname. " is already exists.";
                             header("Location:donations.php");
                         } else{
                            // echo "Your file was uploaded successfully.";
                             
                             $command2="insert into Donation (Name,Email,Address,City,State,ZipCode,Country,Phone,Item,NgoName,DocPath) values('$Name','$Email','$Address','$City','$State','$ZipCode','$Country','$Phone','$Item','$NgoName','$DocPath')";
    
                                if($m=$con->query($command2)=="TRUE")
                                {

                                    $command3="Update Images set count='$count' where Type='Donationdoc'";
                                
                                    if($m=$con->query($command3)=="TRUE")
                                    {
                                       move_uploaded_file($_FILES["photo"]["tmp_name"], "DonationUploadImage/" . $picname.".".$ext);

                                       header("Location:ThanksforDonation.php");    

                                    }
                                    else
                                    {
                                        header("Location:donations.php");
                                    }
                                }
                           
                            

                         } 
                     } else{
                         $_SESSION["error"]="There was a problem uploading your file - please try again.";
                         header("Location:donations.php");
                     }
                 }
             } else{
                 $_SESSION["error"]="Invalid parameters";
                 header("Location:donations.php");
             }
    }
    }
?>