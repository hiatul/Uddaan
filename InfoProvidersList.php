<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Information Providers</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/theme.css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
         
    </head>
    <body style="background-image: url(images/page1/backg.jpeg); background-attachment: fixed; background-repeat: no-repeat;background-size: cover;">
        
            
                  
            
            
        
        <div class="col-12"  style="position: fixed; z-index: 99; height: auto; background: white; box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.8);">
            
            <div class="col-2" style="height: auto;">
                
                <img class="logo" src="images/uddaanLogo.png" style=""width="100%" height="100%">
                <div  style="float: right;background-image: url(images/page1/menu.png);box-sizing:border-box; background-size: cover;width:30px;height: 30px;cursor: pointer;position:relative;top:20px;;right:5px;" class="mm dropdown">
                <div class="dropdown-content" style="left:-180px; top:40px; text-align: center;">
                    
                      <a href="index.php">Home</a>
                      <a href="aboutus.php">About Us</a>                      
                      <a href="Ngo.php">NGO</a>
                      <a href="infoprovider.php">Information Provider</a>
                      <a href="contactus.php">Contact Us</a>
                      <a href="donations.php" style="background: yellowgreen;">Donate</a>
                    </div>      
            </div> 
            </div>
            
            <div class="col-12 menu" style="">
                <ul class="lifontsize">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>                
                <li><a href="project.php">NGO</a>          
                </li>
                <li><a href="techpartners.php">Technical Resources</a></li>
                <li><a href="contactus.php" style="">Contact Us</a></li>
                </ul>
                
                <div class="social" style=" height: 60px; width: 160px; float: right; position: relative; top: -5px; ">
                    <div style="width: auto;height: auto; padding-top: 10px;">
                        <a href="https://m.facebook.com/Uddaan-1408191325864290/?ref=bookmarks"><img  src="images/facebook.svg" width="23%" height="23%"></a>
                        <a href="https://plus.google.com/u/0/103096964010089827528"><img  src="images/google-plus.svg" width="23%" height="23%"></a>
                        <a href="https://twitter.com/Uddaan5"><img  src="images/twitter.svg" width="23%" height="23%"></a>
                        <a href="https://www.youtube.com/channel/UCW3bpZ3ml2kpZQuMGNozlKA"><img  src="images/youtube.svg" width="23%" height="23%"></a>
                    </div>
                
                </div>
            </div>
            
            
        </div>
        
        
        <div class="col-12 main"  >
            <h2 style="background: white; text-align: center; padding: 20px">Information Provided</h2>

        <?php
                $con = new mysqli("localhost","varunk_13","12345","Uddaan");

                                        if($con->connect_error)
                                            {

                                            die("Connection failed:" . $con->connect_error);

                                            }

                                            else
                                            {
                                                $cont=1;
                                                 $command1="Select * from InfroProvider ORDER BY Id DESC";
                                                    $m=$con->query($command1);
                                                    while(($data=$m->fetch_assoc())&&($cont<=3))
                                                    {
                                                       
                                                        

?>
<div class="col-4" style="padding: 5px; height: auto;">                                       
                    <div class="col-12" style="background-color: #D4FFD4;  height: auto; overflow: hidden; padding: 5px;margin: auto; font-size: 18px;color: black; ">
                   
                   <p style="margin-top: 5px; float: right;"><?php echo $data['DateTime']; ?></p>
    
                   <div style="width: 100px; height: 100px; margin: auto; margin-top: 30px; background-image: url('<?php echo $data['DocPath']; ?>'); background-size: cover;"></div>
                        <div class="col-12" style="height: auto;overflow: hidden; margin-top: 5px;">
                            <div class="col-8">
                                <p style="margin-top: 5px;"><?php echo $data['Name']; ?></p>
                                <p style="margin-top: 5px;"><?php echo $data['Email']; ?></p>
                                <p style="margin-top: 5px;">Phone: <?php echo $data['Phone']; ?></p>
                                <p style="margin-top: 5px;">Address: <?php echo $data['Address']; ?></p>
                            </div>   
                             <div class="col-4">
                                <p style="margin-top: 5px;">City: <?php echo $data['City']; ?></p>
                                <p style="margin-top: 5px;">State: <?php echo $data['State']; ?></p>
                                <p style="margin-top: 5px;">ZipCode: <?php echo $data['ZipCode']; ?></p>
                                <p style="margin-top: 5px;">County: <?php echo $data['Country']; ?></p>
                            </div> 
                        
                        </div>
                        
                    </div>
    </div>
<?php
                }
}
mysqli_close($con);
?>
        </div>

           
                         
     
            
        <div class="socialres" style="background: grey;height: 45px;text-align: center;line-height: 40px; width: 100%;">
           <div class="social" style=" height: 60px; width: 160px; margin: auto; position: relative; top: -5px; ">
                    <div style="width: auto;height: auto; padding-top: 10px;">
                        <a href="https://m.facebook.com/Uddaan-1408191325864290/?ref=bookmarks"><img  src="images/facebook.svg" width="23%" height="23%"></a>
                        <a href="https://plus.google.com/u/0/103096964010089827528"><img  src="images/google-plus.svg" width="23%" height="23%"></a>
                        <a href="https://twitter.com/Uddaan5"><img  src="images/twitter.svg" width="23%" height="23%"></a>
                        <a href="https://www.youtube.com/channel/UCW3bpZ3ml2kpZQuMGNozlKA"><img  src="images/youtube.svg" width="23%" height="23%"></a>
                    </div>
                
                </div>
        </div>
                  <div class="col-12" style="background: grey;height: 40px;text-align: center;line-height: 40px; ">&copy;Terms and Conditions</div>

    </body>
</html>
