<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garbageman</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script>
        function showResult(str){
            if(str.length==0){
                document.getElementById("livesearch").innerHTML="";
                document.getElementById("livesearch").style.border="0px";
                return;

            }
            if(window.XMLHttpRequest){
                xmlhttp=new XMLHttpRequest;
            }
            else{
                xmlhttp=new ActiveXobject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function(){
                if(xmlhttp.readyState==4 && xmlhttp.status==200){
                    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
                    document.getElementById("livesearch").style.border=" 1px solid #A5ACB2";

                }
            }
            xmlhttp.open("GET", "livesearch.php?q="+str,true);
            xmlhttp.send();
        }   
    </script>



</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="index.php"><h4>Garbageman</h4></a>
            <ul class="nav_menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Signup</a></li>
                
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>

        </div>
    </nav>

         <form>
            <h3 style="margin-top:100px; text-align:center"> Search by your Area</h3>
            <input style="margin-left:600px;height:30px;border-radius:10px"type="text" size="50" onKeyUp="showResult(this.value)">
            <div id="livesearch"></div>
        </form>

        <script src="./main.js"></script>
        
    </body>
</html>    



