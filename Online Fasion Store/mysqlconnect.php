<!DOCTYPE html>
<html>
<head>
	<title>mysqlconnect</title>
  <style>
        body{
            color: white;
            background-color: black;
            background-image: url("bird_logo.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }
        input[type=button],input[type=submit],input[type=reset]{
            background-color: black;
            border:none;
            color: white;
            padding: 3px 24px;
            text-decoration: none;
            cursor: pointer;
            
        }

        .wrapper{
            width: 50px
            padding: 10px;
            text-align: center;
            background-color: orange;
        }
        .marque{
            color: gold;
        }
        ul
        {
            list-style-type:square;
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            border:1px solid #555;
        }
        li a{
            display: block;
            color:#000;
            padding: 16px 32px;
            text-decoration: none;
        }
        li{
            text-align: center;
            border-bottom:none;
        }
        li:last-child{
            border-bottom:none;
        }
        li a.active{
            background-color: orange;
            color: white;
        }
        li a:hover:not(.active){
            background-color: #555;
            color: white;
        }

        </style>
  
</head>

<body>
<?php
$link= mysqli_connect("localhost","root","","ofs");
if($link){
echo "connected succesfully ";
"<br>";

if(isset($_POST['submit']))
{
	  $a=$_POST['uname'];
    $b=$_POST['emailid'];
    $c=$_POST['phno'];
    $d=$_POST['city'];
    $e=$_POST['pswd'];
   $sql="insert into signup(uname,emailid,phno,city,pswd)values('$a','$b','$c','$d','$e')";
   if(mysqli_query($link,$sql))
   {
   	echo"& inserted successfully.";
   }
   else{
   	echo "Error:could not able to execute $sql.".mysqli_error($link);
   }
   } }
   mysqli_close($link);
?>
<br> <br>

<button onclick="document.location='index.html'">Back Home</button>

</body>
</html>