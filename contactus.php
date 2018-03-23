<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/contactus.css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
         
         <script src="javaScript/buttonclk.js"></script>
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
                    <li style=" border-bottom:4px solid green;"><a href="contactus.php" style="">Contact Us</a></li>
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

            <div class="col-10 titlehead">
                <h1>We are here to help you</h1>
            </div>
            
            <div class="col-10 contents" >
                <div class="col-6 part1">

                    <div class="col-12 comment" style="">
                        <h1>Contact us</h1>
                        <form style="margin-top: 30px;" action="QueryEmail.php" method="POST">
                            
                            <div style=" height: auto; background: #0099cc; margin: auto; float: none; " >
                                <img style="float: left; position: relative; left: 30px;" width="26" height="26" src="images/contactus/user_96px.png">
                                <input type="text" name="Name" placeholder="Name" style=" float: left; width: 86%; font-size: 15px;padding: 5px; border-radius: 5px; padding-left: 40px; outline: none; border: none;">
                            </div>
                            
                             <div style=" height: auto; background: #0099cc;clear: both; margin: auto; float: none; position: relative; top: 10px;" >
                                 <img style="float: left; position: relative; left: 30px;" width="26" height="26" src="images/contactus/message_96px.png">
                                <input type="Email" name="Email" placeholder="Email" style=" float: left; width: 86%; font-size: 15px;padding: 5px; border-radius: 5px; padding-left: 40px; outline: none; border: none;">
                            </div>
                            
                            <div style=" height: auto; background: #0099cc; clear: both; margin: auto; float: none; margin-top: 50px;" >
                                <img style="float: left; position: relative; left: 30px;" width="26" height="26" src="images/contactus/messagetxt_96px.png">
                                <textarea name="Message" placeholder="Message" rows="4" style=" float: left; width: 86%; font-size: 15px;padding: 5px; border-radius: 5px; padding-left: 40px; outline: none; border: none;"></textarea>
                            </div>
                            
                            <div style=" height: auto;  clear: both; margin: auto; float: none; margin-top: 180px;">
                               
                                <input type="submit" id="submit" style="width: 86%; position: relative; left: -7px; border: none; box-shadow: 0px 0px 6px 2px rgba(0,0,0,0.3);  background: #129212; color: white; height: 40px; border-radius: 10px;">
                            </div>
                            
                            
                        </form>
                        
                    </div>
                    
                    
                    
                </div>
                <div class="col-6 mapdiv">
                    
                    <div id="map" style="border-radius: 10px; box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.5);"></div>
    <script>
      function initMap() {
        var uluru = {lat: 28.6212863, lng: 77.0355209};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjogoLMHAk6hWaYqkGmPwXWqtaKUxfGu0&callback=initMap">
    </script>
        
                </div>
            </div>
            
            
        </div>

           
                         
     
            
          <div class="socialres" style="background: grey;height: 45px;text-align: center; line-height: 40px; width: 100%;">
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

    

