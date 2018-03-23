<?php

session_start();


if(isset($_SESSION["error"]))
{
    $error=$_SESSION["error"];  
    session_destroy();
}
 else
    
 {
  $error="";
  
 }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Information Provider</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/infoprovider.css"/>

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
            
            <div class="col-12 menu">
                <ul class="lifontsize">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>                
                <li><a href="Ngo.php">NGO</a>          
                </li>
                <li><a href="donations.php">Donations</a></li>
                <li style="border-bottom:4px solid   green;"><a href="infoprovider.php">Information Provider</a></li>
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
        
        
        <div class="col-12 main">

            <div class="col-11" style="margin: auto; float: none; margin-top: 10px; height: auto; text-align: center; color: white;"><h1>Be a Humanity Agent</h1></div>
<!--            <div class="col-11" style="margin: auto; float: none; margin-top: 10px; height: 50px; text-align: center; color: white; font-size: 24px;"></div>-->
            <div class="col-11" style="margin: auto; float: none; margin-top: 10px; height: auto; overflow: hidden; padding: 10px;  text-align: center; color: white; font-size: 24px;">
                <div class="col-6" style="background: rgba(0,0,0,0.7); height: auto; overflow: hidden; float: left; padding: 20px;">
                    
                    <h4 style="margin-top: 10px;">Information Provider Form</h4>
                    <p style="margin-top: 10px; color: tomato; direction: none;" id="error1"><?php echo $error;?></p>
                    <form style="margin-top: 30px;" action="InfoProviderInsert.php" method="POST" enctype="multipart/form-data">
                            
                            <div style="width: 90%; height: auto; padding-left: 5px; padding-right: 5px; border-radius: 5px; margin: auto; float: none; overflow: hidden; background: white; " >
                                    <img style="float: left; " width="26" height="26" src="images/contactus/user_96px.png">
                                    <input type="text" name="name" placeholder="Name" style=" float: left; width: 80%; font-size: 15px;padding: 5px; border-radius: 5px;  outline: none; border: none;" required>

                            </div>
                            <div style="width: 90%; height: auto; padding-left: 5px; padding-right: 5px; border-radius: 5px; margin: auto; margin-top: 10px; float: none; overflow: hidden; background: white; " >
                                    <img style="float: left; " width="26" height="26" src="images/contactus/message_96px.png">
                                <input type="email" name="email" placeholder="Email" style=" float: left; width: 80%; font-size: 15px;padding: 5px; border-radius: 5px;  outline: none; border: none;" required>

                            </div>
                            
                            <div  style=" width: 90%; height: auto; padding-left: 5px; padding-right: 5px; border-radius: 5px; margin: auto; margin-top: 10px; float: none; overflow: hidden; background: white; " >
                                    <img style="float: left; " width="26" height="26" src="images/contactus/messagetxt_96px.png">
                                    <input type="text" name="address" placeholder="Area where help needed..." style=" float: left; width: 80%; font-size: 15px;padding: 5px; border-radius: 5px;  outline: none; border: none;" required>

                            </div>
                            
                            <div style=" width: 90%; margin: auto; margin-top: 10px; height: auto;  float: none; overflow: hidden;">
                                <div class="col-6" style="padding-top: 5px; padding-left: 5px; height: auto;  margin: auto;overflow: hidden; float: left;">
                                    <p style="text-align: center; height: 26px; float: left; width: 80px; font-size: 18px; margin-right: 5px;">City</p>
                                    <select name="city" style="font-size: 15px; border-radius: 5px; float: left; outline: none; border: none; width: 130px;" required=""><option value="New Delhi">New Delhi</option></select>
                                </div>
                                <div class="col-6" style="padding-top: 5px; padding-left: 5px; height: auto;  margin: auto;overflow: hidden; float: right;">
                                    <p style=" text-align: center; height: 26px; width: 80px; float: left; font-size: 18px; margin-right: 5px;">State</p>
                                    <select name="state" style="font-size: 15px; border-radius: 5px; float: left; outline: none; border: none; width: 130px;" required=""><option value="Delhi">Delhi</option></select>
                                </div>
                                
                            </div>
                            
                            <div style=" width: 90%; margin: auto; margin-top: 5px; height: auto;  float: none; overflow: hidden;">
                                <div class="col-6" style="padding-top: 5px; padding-left: 5px; height: auto;  margin: auto;overflow: hidden; float: left;">
                                    <p style="text-align: center; height: 26px; float: left; width: 80px; font-size: 18px; margin-right: 5px;">Zip Code</p>
                                    <input type="number" name="zipcode" style="padding-left: 4px; font-size: 15px; border-radius: 5px; float: left; outline: none; border: none; width: 130px;" required="">
                                </div>
                                <div class="col-6" style="padding-top: 5px; padding-left: 5px; height: auto;  margin: auto;overflow: hidden; float: right;">
                                    <p style=" text-align: center; height: 26px; width: 80px; float: left; font-size: 18px; margin-right: 5px;">Country</p>
                                    <select name="country" style="font-size: 15px; border-radius: 5px; float: left; outline: none; border: none; width: 130px;" required><option value="India">India</option></select>
                                </div>
                                                                
                            </div>
                            
                            <div  style=" width: 90%; height: auto; padding-left: 5px; padding-right: 5px; border-radius: 5px; margin: auto; margin-top: 10px; float: none; overflow: hidden; background: white; " >
                                    <img style="float: left; " width="26" height="26" src="images/contactus/phone_96px.png">
                                    <input type="tel" id="Phone" maxlength="16" value="+91" id="Phone" name="phone" placeholder="Phone" style=" float: left; width: 80%; font-size: 15px;padding: 5px; border-radius: 5px;  outline: none; border: none;" required>

                            </div>
                                                        
                            <div style=" width: 90%; margin: auto; margin-top: 5px; height: auto;  float: none; overflow: hidden;">
                                <div class="col-11" style="padding-top: 5px;  height: auto;  margin: auto;overflow: hidden; float: left;">
                                    <p style="text-align: left; height: auto; float: left; width: 100%; font-size: 18px;">To Whome You Want to Tell</p>
                                    <select name="ngo" style="font-size: 15px; border-radius: 5px; float: left; outline: none; border: none; width:100%;" required>
                                    <?php
                                        //$con = new mysqli("localhost","root","","Udaan");
                                        $con = new mysqli("localhost","varunk_13","12345","Uddaan");

                                        if($con->connect_error)
                                            {

                                            die("Connection failed:" . $con->connect_error);

                                            }

                                            else
                                            {
                                                 $command1="Select * from Ngo";
                                                    $m=$con->query($command1);
                                                    while($data=$m->fetch_assoc())
                                                    {

                                    ?>
                                        
                                        <option value='<?php echo $data['NgoName'];?>'><?php echo $data['NgoName'];?></option>
                                                       <?php
                                                    }
                                                
                                            }
                                    ?>
                                    </select>
                                </div>
                                
                                                                
                            </div>
                            
                            
                             <div  style=" width: 90%; height: auto; padding-left: 5px; padding-right: 5px; border-radius: 5px; margin: auto; margin-top: 10px; float: none; overflow: hidden; background: white; " >
                                <img style="float: left; " width="26" height="26" src="images/contactus/attach.png">
                                <input type="file" id="DocPath" name="photo" style=" color: black; float: left; width: 80%; font-size: 15px;padding: 5px; border-radius: 5px;  outline: none; border: none;">
                            </div>
                            
                            
                            <div style=" height: auto;  clear: both; margin: auto; float: none; margin-top: 30px; margin-bottom: 10px;">
                               
                                <input type="submit" style="color: white; width: 60%; position: relative; border: none; box-shadow: 0px 0px 6px 2px rgba(0,0,0,0.3);  background: #129212; height: 40px; border-radius: 10px;">
                            </div>       
                                
                              
                            
                            
                        </form>
                    
                </div>
                <div class="col-6 part2" style="background: #f9f9f9; height: 536px; color: dimgray; padding: 20px; float: right;">
                    <h3>We can’t help everyone, but everyone can help someone</h3>
                    <p style="margin-top: 20px;">Feeling for under privileged people and taking a step further for helping them in some or the other manner, is something which truly deserves a standing ovation. Doing something for ourselves remains for a while but doing something for others remains forever. Someone providing information and wanting a change in some under developed area are most welcome. Provide us with the address and condition of the area, it will be then “UDDAAN’s” responsibility to make your efforts worth</p>
                </div>
                
            </div>
            <div class="col-11" style="text-align: center; margin: auto; color: black; float: none; margin-top: 10px; box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.5); margin-bottom: 10px; height: auto; overflow: hidden; text-align: center; font-size: 24px;">
               <h2 style="background: white;">Information Provided</h2>
               
<?php
                $con = new mysqli("localhost","varunk_13","12345","Uddaan");
                                        //$con = new mysqli("localhost","root","","Udaan");

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
                                                        if($cont<=3)
                                                        {
                                                        

?>
<div class="col-4" style="padding: 5px; height: auto;">                                       
                    <div class="col-12" style="background-color: #D4FFD4;  height: auto; overflow: hidden; padding: 5px; float: left; font-size: 18px;color: black; ">
                   
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
   $cont++;                                                     }else{}
                                                    }   }
mysqli_close($con);
?>
            
<div class="col-12" style="background: white; height: 40px; padding: 5px;">
    <a href="InfoProvidersList.php"><img src="images/info.png" width="30" height="30"></a>
</div>
            </div>

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

    

