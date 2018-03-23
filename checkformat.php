<?php
$x=$_GET["data"];
    $y=  basename($x);
    $k=   pathinfo($y,PATHINFO_EXTENSION);
    if(($k=="jpg")||($k=="jpeg")||($k=="bmp")||($k=="jpe")||($k=="png")||($k=="jpg")||($k=="tif")||($k=="tiff"))
    {
        echo '1';
    }
 else {
        echo '0';        
    }
    
?>

