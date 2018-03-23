<?php

    $con = new mysqli("localhost","varunk_13","12345","Uddaan");
    //$con = new mysqli("localhost","root","","Udaan");

if($con->connect_error)
    {
    die("Connection failed:" . $con->connect_error);    
    }

    else
    {
    session_start();
    $error="";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['Email']);
      $mypassword = mysqli_real_escape_string($con,$_POST['Password']);
            
      $sql = "SELECT id FROM Ngo WHERE Email = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['login_user'] = $myusername;
         header("location: NgoWelcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NGO LOGIN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/form.css"/>
         
        
        <script>
            var flag=0;
            
            function setDisplay()
            {
                document.getElementById("error3").style.display="none";
                document.getElementById("error2").style.display="none";


            }
            
            function check()
            {                
                if(flag==0)
                {   
                  
                }
                else{
                    return false;
                    }
                return true;
            }
            
            
             function fetchh() {
             flag=0;
             document.getElementById("error3").style.display="none";
             document.getElementById("error3").innerHTML ="";
             var Email=document.getElementById("Email").value;
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {   
                if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("error3").style.display="block";
                 var data = this.responseText;
                 document.getElementById("error3").innerHTML=data;

                 if(data.lenght==14)
                 {
                     flag=1;
                 }
                 else{}
                }
              };
              xhttp.open("GET", "NgoRegistered2Check.php?Email="+Email, true);
              xhttp.send();
            }
        </script>
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
                      <a href="information.php">Information Provider</a>
                      <a href="contactus.php">Contact Us</a>
                      <a href="donations.php" style="background: yellowgreen;">Donate</a>
                    </div>          
            </div> 
            </div>
            
            <div class="col-12 menu">
               <ul class="lifontsize">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>                
                    <li style=" border-bottom:4px solid   green;"><a href="Ngo.php">NGO</a></li>
                    <li><a href="donations.php">Donations</a></li>
                    <li><a href="Information.php">Information Provider</a></li>
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
        
        
        <div class="col-12 main" style="background-color: rgba(0,0,0,0.7);"  >
            
             <div class="col-6" style="height: 600px; margin: auto; float: none; color: white; padding: 20px; text-align: center;">
                <h2>NGO Login</h2>
                <p id="error2" style="color: tomato; margin-top: 10px; font-size: 20px; display: block;"><?php echo $error; ?></p>
                <p id="error3" style="color: tomato; margin-top: 10px; font-size: 20px; display: none;"></p>

                <form style="margin-top: 30px;" method="POST" action="">
                            
                          
                            <div class="inputfield" >
                                    <img style="float: left; " width="26" height="26" src="images/contactus/user_96px.png">
                                    <input class="inp" id="Email" type="email" name="Email" onfocus="setDisplay()" placeholder="Enter Your Email Address" style="" required>

                            </div>
                            
                            <div class="inputfield">
                                    <img style="float: left; " width="26" height="26" src="images/contactus/password_1_96px.png">
                                    <input class="inp" type="password" name="Password" onfocus="fetchh()" placeholder="Password" style=" " required>

                                    </div>
                                    
                                 <input type="submit" name="submit" value="Login" style="color: whitesmoke; background: green; float: none; width: 90%; font-size: 15px;padding: 5px; border-radius: 5px;  outline: none; border: none;margin-top: 10px;">
            
                        </form>
                <a href="Ngo.php" style="" id="Register"><button type="submit" name="Register" value="Register" style="color: whitesmoke; background: tomato; float: none; width: 90%; font-size: 15px;padding: 5px; border-radius: 5px;  outline: none; border: none;margin-top: 10px;">Register</button></a>

                  
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

    
<?php mysqli_close($con); ?>
