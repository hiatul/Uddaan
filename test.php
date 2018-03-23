<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
        function fff()
             {
                        var a=document.getElementById('DocPath').value;
                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200)
                        {
                     document.getElementById("te").innerHTML = this.responseText;
                      
                      
                        }
                        };
                    xhttp.open("GET", "checkformat.php?data="+a, true);
                    xhttp.send();
            }
        
        </script>
    </head>
    <body>
        <p id="te">hello</p>
        <input type="file" name="DocPath" id="DocPath">
        <button name="button" onclick="fff()">hello</button>
    </body>
</html>
