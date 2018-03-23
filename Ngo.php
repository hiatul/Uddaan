<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>NGO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/form.css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
         <script>
         var flag=0;
         
         function CheckData()
         {
            var p1=document.getElementById("p1").value;
            var p2=document.getElementById("p2").value; 
            var ph=document.getElementById("Phone").value;
           
        if(p1.length>=5)
            {
                
            
        
            if(p1!==p2)
            {
                document.getElementById("error1").innerHTML="Note:*Password don't match."; 
                document.getElementById("error1").style.display="block";

                if(ph.length<10)    
                {
                
                document.getElementById("error2").innerHTML="Note:*Please Enter a valid Phone Number"; 
                document.getElementById("error2").style.display="block";
                return false;
                }  
                else{
                    document.getElementById("error2").style.display="none";
                    return false;
                }
            }
            else
            {
                document.getElementById("error1").style.display="none";
                
                if(ph.length<10)    
                {
                document.getElementById("error2").innerHTML="Note:*Please Enter a valid Phone Number"; 
                document.getElementById("error2").style.display="block";

                return false;
                
                }  
                else{
                    document.getElementById("error2").style.display="none";
                    
                }
            }
            
            
        }
        else
        {
            
            document.getElementById("error1").innerHTML="Note:*Password should be atleast 5 characters long";
            document.getElementById("error1").style.display="block";
            return false;
        }
        
        if(flag==1)
     {
         return false;
     }
        else
        { 
            return true;
        }
         
         
    }
         function fetchh() {
             flag=0;
             document.getElementById("error3").style.display="none";
            document.getElementById("error3").innerHTML ="";
            var NgoName=document.getElementById("NgoName").value;
            var Email=document.getElementById("Email").value;
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {   
                if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("error3").style.display="block";
                        var data= this.responseText;
                 document.getElementById("error3").innerHTML =data;
                 
                 if(data.length==19)
                 {
                     flag=1;
                 }
                 else{

                 }
                }
              };
              xhttp.open("GET", "NgoRegisteredCheck.php?NgoName="+NgoName+"&Email="+Email, true);
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
                    <li style=" border-bottom:4px solid   green;"><a href="Ngo.php">NGO</a></li>
                    <li><a href="donations.php">Donations</a></li>
                    <li><a href="infoprovider.php">Information Provider</a></li>
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
        
        <div class="col-10 " style="margin: auto; float: none; height: auto;">
            
            <div class="col-8" style="height: auto;margin: auto; float: none; color: white; background: rgba(0,0,0,0.7); padding: 20px; text-align: center;">
                <h2>NGO Registaration Form</h2>
                <p id="error1" style="color: tomato; margin-top: 10px; display: none;"></p>
                <p id="error2" style="color: tomato; margin-top: 10px; display: none;"></p>
                <p id="error3" style="color: tomato; margin-top: 10px; display: none;"></p>

                <form style="margin-top: 30px;" onsubmit="return CheckData()"  method="GET" action="NgoInsert.php">
                            
                            <div class="inputfield">
                                <img style="float: left; " width="26" height="26" src="images/contactus/organization_96px.png">
                                <input class="inp" type="text" id="NgoName" name="NgoName" placeholder="Name of the Organisation" style=" " required>

                            </div>
                            <div class="inputfield">
                                    <img style="float: left; " width="26" height="26" src="images/contactus/user_96px.png">
                                    <input class="inp" type="text" name="UserName"  placeholder="User Name" style=" " required>

                            </div>
                            
                            <div class="inputfield">
                                    <img style="float: left; " width="26" height="26" src="images/contactus/message_96px.png">
                                    <input class="inp" id="Email" type="email" name="Email" placeholder="Email" onkeyup="fetchh()" style="" required>

                            </div>
                   
                         
                   
                            <div class="inputfield">
                                <img style="float: left; " width="26" height="26" src="images/contactus/messagetxt_96px.png">
                                    <input class="inp" type="text" name="Address" placeholder="Adderss" style=" " required>

                            </div>
                            
                            <div style=" width: 90%; margin: auto; margin-top: 10px; height: auto;  float: none; overflow: hidden;">
                                <div class="col-6" style="padding-top: 5px; padding-left: 5px; height: auto;  margin: auto;overflow: hidden; float: left;">
                                    <p style="text-align: center; height: 26px; float: left; width: 80px; font-size: 18px; margin-right: 5px;">City</p>
                                    <select name="City" style="font-size: 15px; border-radius: 5px; float: left; outline: none; border: none; width: 130px;" required=""><option value="New Delhi">New Delhi</option></select>
                                </div>
                                <div class="col-6" style="padding-top: 5px; padding-left: 5px; height: auto;  margin: auto;overflow: hidden; float: right;">
                                    <p style=" text-align: center; height: 26px; width: 80px; float: left; font-size: 18px; margin-right: 5px;">State</p>
                                    <select name="State" style="font-size: 15px; border-radius: 5px; float: left; outline: none; border: none; width: 130px;" required=""><option value="Delhi">Delhi</option></select>
                                </div>
                                
                            </div>
                            
                            <div style=" width: 90%; margin: auto; margin-top: 5px; height: auto;  float: none; overflow: hidden;">
                                <div class="col-6" style="padding-top: 5px; padding-left: 5px; height: auto;  margin: auto;overflow: hidden; float: left;">
                                    <p style="text-align: center; height: 26px; float: left; width: 80px; font-size: 18px; margin-right: 5px;">Zip Code</p>
                                    <input name="ZipCode" type="number" style="padding-left: 4px; font-size: 15px; border-radius: 5px; float: left; outline: none; border: none; width: 130px;" required="">
                                </div>
                                <div class="col-6" style="padding-top: 5px; padding-left: 5px; height: auto;  margin: auto;overflow: hidden; float: right;">
                                    <p style=" text-align: center; height: 26px; width: 80px; float: left; font-size: 18px; margin-right: 5px;">Country</p>
                                    <select name="Country" style="font-size: 15px; border-radius: 5px; float: left; outline: none; border: none; width: 130px;" required><option value="India">India</option></select>
                                </div>
                                                                
                            </div>
                   
                            <div class="inputfield">
                                            <img style="float: left; " width="26" height="26" src="images/contactus/password_1_96px.png">
                                            <input class="inp" id="p1" type="password" name="Password" placeholder="Password" style=" " required>

                            </div>
                                    
                            <div class="inputfield">                                       
                                        <img style="float: left; " width="26" height="26" src="images/contactus/password_1_96px.png">
                                        <input  class="inp" id="p2" type="password" name="Repassword" placeholder="Retype Password" style=" " required>

                            </div>             
                            
                            <div class="inputfield">
                                    <img style="float: left; " width="26" height="26" src="images/contactus/phone_96px.png">
                                    <input class="inp" type="tel" name="Phone" value="+91" id="Phone" maxlength="13"  placeholder="Phone" style=" " required>

                            </div>
                            
                    <input type="submit" name="submit" value="Submit" style="color: whitesmoke; background: green; float: none; width: 90%; font-size: 15px;padding: 5px; border-radius: 5px;  outline: none; border: none;margin-top: 10px;">

                         
                  
                   
                            
                                                      
                        </form>
                    
                <a href="NgoLogin.php"><button  name="login" value="login" style="color: whitesmoke; background: tomato; float: none; width: 90%; font-size: 15px;padding: 5px; border-radius: 5px;  outline: none; border: none;margin-top: 10px;">Login</button></a>

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

    

