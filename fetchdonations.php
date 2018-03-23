<?php
$con = new mysqli("localhost","varunk_13","12345","Uddaan");
//$con = new mysqli("localhost","root","","Udaan");

if($con->connect_error)
    {
    
    die("Connection failed:" . $con->connect_error);
    
    }

    else
    {
        $Ngo="";
        
        $cammand="select * from Ngo where Email='$email'";
        
        $mm=$con->query($cammand);

        if($data=$mm->fetch_assoc())
        {
            $Ngo=$data['NgoName'];
        }
        $command2="select * from Donation where NgoName='$Ngo' order by Id DESC";
        $mm=$con->query($command2);
       
        if(!$mm || mysqli_num_rows($mm) == 0)
        {
            ?>
             <div class="col-12" style="background-color: rgba(255,255,255,0.6); height: 100px;margin-top: 5px; padding: 20px;">
                        <h3>No Donations Till Now...</h3>
             </div>
                  
                        <?php  
                    
        }
        
        while($data=$mm->fetch_assoc())
        {
        
            ?>
               <div style="margin-top: 5px; width: 100%; background-color: rgba(255,255,225,0.3); height: auto; overflow: hidden; padding: 5px;">
                   
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
                        <div class="col-12" style="height: auto;overflow: hidden; margin-top: 5px;">
                        <p>Item to be donated: <?php echo $data['Item']; ?></p>
                        </div>
                        </div>
                        
                    </div>
                        
                        <?php
        }
        
        
    }
mysqli_close($con);
?>