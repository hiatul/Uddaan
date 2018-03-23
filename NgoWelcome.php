<?php 
session_start();

$email=$_SESSION['login_user'];
$Ngo="";

$con = new mysqli("localhost","varunk_13","12345","Uddaan");
//$con = new mysqli("localhost","root","","Udaan");

if($con->connect_error)
    {
    
    die("Connection failed:" . $con->connect_error);
    
    }

    else
    {
        
        
        $cammand="select * from Ngo where Email='$email'";
        
        $mm=$con->query($cammand);

        if($data=$mm->fetch_assoc())
        {
            $Ngo=$data['NgoName'];
        }
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/NgoWelcome.css"/>

        </head>
    <body style="background-image: url(images/page1/backg.jpeg); background-attachment: fixed; background-repeat: no-repeat;background-size: cover;">
        
            
                  
            
            
        
        <div class="col-12"  style="position: fixed; z-index: 99; height: auto; background: white; box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.8);">
            <div class="col-2" style="height: auto;">
                <img class="logo headlogoNoRes" src="images/uddaanLogo.png" style="" width="100%" height="100%">
                
                
                <div class="headlogoRes">
                <img class="logo" src="images/uddaanLogo.png" style="" width="100%" height="100%">
                </div>
                
                <div class="headcontentRes" style="">
                         <h3>Welcome <?php echo $Ngo;?></h3>
   
                </div>
                <div  style="float: right;background-image: url(images/page1/menu.png);box-sizing:border-box; background-size: cover;width:30px;height: 30px;cursor: pointer;position:relative;top:20px;;right:5px;" class="mm dropdown">
                <div class="dropdown-content" style="left:-180px; top:40px; text-align: center;">
                    
                    <a><?php echo $_SESSION['login_user'];?></a>
                      <a href="NgoLogout.php" style="background: tomato;">Logout</a>
                    </div>      
            </div> 
            </div>
            <div class="col-8 headcontent">
                        <h1>Welcome  <?php echo $Ngo;?></h1>   
            </div>
            
            <div class="col-9 menu">
                <ul class="lifontsize">
                  
                </ul>
                
               <div style=" width: 15.0em; text-align: center; float: right; background: tomato; position: relative; top: -35px; right: -110px; padding: 10px; font-size: 1.2vw; border-radius: 10px; ">
                   <a href="NgoLogout.php" style="text-decoration: none;  color: black; outline: none;"><h4>Logout</h4> <?php echo $_SESSION['login_user'];?></a>
                </div>
                
                
            </div>
             
        </div>
        
        
        <div class="col-12 main" style="" >
            
            <div class="col-11 contents">
                
                <div class="col-6 part1">
                    <h2>Donations</h2>
                    
                   <?php include('./fetchdonations.php');?>
                    
                    
                </div>
                <div class="col-6 part2 borderRes">
                    <h2>Information Provided</h2>
                  
                        <?php include('./fetchinfoprovider.php');?>

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
              <div class="col-12" style="color: white; background: grey;height: 40px;text-align: center;line-height: 40px; ">&copy;Terms and Conditions</div>

    </body>
</html>

    
<?php
  }
mysqli_close($con);
?>
