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
    
                $command1="Select * from Images where Type='Infroproviderdoc'";
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
       $NgoName=$_POST['ngo'];
                       
                if(isset($_FILES["photo"]["error"])){
              
                    if($_FILES["photo"]["error"] > 0){
                     $_SESSION["error"]= "Invalid file";
                     header("Location:infoprovider.php");
                    } else{
                     $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                     $filename = $_FILES["photo"]["name"];
                     $filetype = $_FILES["photo"]["type"];
                     $filesize = $_FILES["photo"]["size"];

                     // Verify file extension
                     $ext = pathinfo($filename, PATHINFO_EXTENSION);
                     if(!array_key_exists($ext, $allowed))
                    {
                         $_SESSION["error"]="Please select a valid file format.";
                         header("Location:infoprovider.php");
                     }
                     $DocPath="InfoproviderUploadImage/".$picname.".".$ext;
                     
                     // Verify file size - 5MB maximum
                     $maxsize = 5 * 1024 * 1024;
                     if($filesize > $maxsize) 
                         {
                         $_SESSION["error"]= "File size is larger than the allowed limit.";                         
                         header("Location:infoprovider.php");
                        }
                     // Verify MYME type of the file
                     if(in_array($filetype, $allowed)){
                         // Check whether file exists before uploading it


                         if(file_exists("InfoproviderUploadImage/" . $picname.".".$ext))
                         {
                             $_SESSION["error"]=$picname. " is already exists.";
                             header("Location:infoprovider.php");
                         } else{
                            // echo "Your file was uploaded successfully.";
                             
                             $command2="Insert into InfroProvider (Name,Email,Address,City,State,ZipCode,Country,Phone,NgoName,DocPath) values('$Name','$Email','$Address','$City','$State','$ZipCode','$Country','$Phone','$NgoName','$DocPath')";
    
                                if($m=$con->query($command2)=="TRUE")
                                {

                                    $command3="Update Images set count='$count' where Type='Infroproviderdoc'";
                                    
                                    if($m=$con->query($command3)=="TRUE")
                                    {
                                       move_uploaded_file($_FILES["photo"]["tmp_name"], "InfoproviderUploadImage/" . $picname.".".$ext);
                                       header("location:ThanksforInfo.php");    
                                    }
                                    else
                                    {
                                     header("Location:infoprovider.php");
                                    }
                                }
                           
                            

                         } 
                     } else{
                         $_SESSION["error"]="There was a problem uploading your file - please try again."; 
                         header("Location:infoprovider.php");
                     }
                 }
             } else{
                 $_SESSION["error"]="Invalid parameters";
                 header("Location:infoprovider.php");
             }
}
    }
?>