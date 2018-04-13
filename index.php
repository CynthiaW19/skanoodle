<!DOCTYPE html>
<?php 
session_start(); 
$_SESSION['pagename'] = "phpform_index";
include 'db/db.php';
//include 'db/error.php'; 
//include '../db/pushhits.php';
?> 
<html>
<title>Skanoodle</title>
<link rel="icon" href="dollar.png" type="image/png" />
<meta charset="UTF-8">
<link rel="stylesheet" href="cw.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font.css">

<style>
p {
	font-size: 22px;
}
ul {	
	position: absolute;
	align:left;
	list-style-type: none;
}
a {
	text-decoration: none;
	font-size: 25px;
}
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #ff0066;
    border-radius: 4px;
}
textarea {
	resize: none;
    width: 100%;
    height: 200px;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #ff0066;
    border-radius: 4px;
}

h1{
	text-align:center;
}
comment{

	font-size: 20px;
	font-family:'Passion One', cursive;
	
}




</style>
<body>
<div class="w3-top">
  <div class="w3-bar w3-black w3-card" id="myNavbar">
    <a href="#" class="w3-bar-item w3-button w3-wide">SKANOODLE</a>
    <div class="w3-right w3-hide-small">
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-list"></i>Home </a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-list"></i> Our Team</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
      <a href="documents/" class="w3-bar-item w3-button" target="_blank">Network Bid</a>
    </div>

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>


<div class="w3-row">
  <div class="w3-half w3-black w3-container w3-center" style="height:750px">
    <div class="w3-padding-64">
      <h1>Exploodle</h1>
    </div>
    <div class="w3-padding-64">
      <a href="#work" class="w3-button w3-black w3-block w3-hover-blue-gray w3-padding-16">Our Team</a>
      <a href="#work" class="w3-button w3-black w3-block w3-hover-teal w3-padding-16">Stocks</a>
      <a href="#contact" class="w3-button w3-black w3-block w3-hover-gray w3-padding-16">Contact</a>

      
    </div>
  </div>
  <div class="w3-half w3-teal w3-container" style="height:750px">
    <div class="w3-padding-64 w3-center">
      <h1>Our Bank</h1>
      <img src="noodlebank.png" alt="Person" style="width:50%">
      <div class="w3-left-align w3-padding-large">
        <p></p>
        <p></p>
      </div>
    </div>
  </div>
</div>

<div class="w3-row">
  <div class="w3-half w3-deep-purple w3-center" style="height:873px" id="work">
    <div class="w3-padding-64">
      <h2>Our Team</h2>

    </div>
    <div class="w3-row">
      <div class="w3-half">

      </div>
      <div class="w3-half">

      </div>
    </div>
    <div class="w3-row w3-hide-small">
      <div class="w3-half">

      </div>
      <div class="w3-half">

      </div>
    </div>

    <div class="w3-row w3-hide-small">
      <div class="w3-half">



      </div>
<div>
<img src="curl.png" align="right" width="30%">


</div>




<ul>
	<li><img src="keeg.png"></li>Founder

	<li><img src="cyn.png"></li>Manager

	<li><img src="car.png"></li>Teller

	<li><img src="micc1.png"></li>Guard

     </ul>
     
    </div><br>

  </div>
  <div class="w3-half w3-light-gray w3-cotainer" style="min-height:800px">
    <div class="w3-padding-64 w3-center">
      <img src="stock1.png" width="50%" style="border:10px solid black;">
      <br>
      </br>
       <br>
      </br>
      <img src="stock.png" width="50%" style="border:10px solid black;">
      
      </div>
    </div>
  </div>
</div>

<div class="w3-row" id="contact">
  <div class="w3-half w3-dark-grey w3-container w3-center" style="height:700px">
    <div class="w3-padding-64">
      <h1>Visit Us!</h1>
    </div>
    <div class="w3-padding-64">
      <p>..for a cup of money, or whatever.</p>
      <p>Kennewick, WA</p>
      <p>(509)-531-NOOD</p>
      <p>skanoodle@gmail.com</p>
    </div>
  </div>
  <div class="w3-half w3-deep-orange w3-container" style="height:700px">
<?php  
if(empty($_POST['name'])){  $name_input = "Name";  } 
	else {	$name_input = 	$_POST['name'];	}
	
if(empty($_POST['comment'])){  $comment_input = "Comment";  } 
	else {	$comment_input = 	$_POST['comment'];	}

?>


<div class="w3-row" id="contact">
    <div class="w3-padding-64">
      <h1>Contact Us</h1>
    </div>
<comment>
<form  method="post">
<br>

&nbsp;	Name <input type="text" name="name" maxlength="20" style="background-image: url('https://github.com/CynthiaW19/html/blob/master/nood6.png?raw=true')"> 
<br>
<br>

&nbsp;  Comment <textarea name="comment" maxlength="500" rows="2" cols="25" style="line-height:200%; background-image: url('https://github.com/CynthiaW19/html/blob/master/noodles.png?raw=true')"></textarea>
</comment>
<button class="w3-button w3-pink w3-round-xlarge">Submit</button><button class="w3-button w3-red w3-round-xlarge" style="float: right; height:46px;width:100px;"><a href = "select.php">Logs</a></button>
</form>

</div>
<?php

if ( $name_input != "Name" ){
//sql input	*******************************	


if (!($connection = mysqli_connect($hostname,$username, $password))) die("Could not connect to database");
 mysqli_select_db( $connection,"stream");



	#$result = mysqli_query( $conn,$sql) or die('Could not look up user information; ' . mysqli_error($conn));
	$result = mysqli_query ( $connection, "SELECT CURDATE();");
	$row = mysqli_fetch_row($result);$date = $row[0];
   
	$result = mysqli_query ($connection,"SELECT CURTIME();" );
	$row = mysqli_fetch_row($result);$time = $row[0];

	$str0 = '';
	$str1 = $_SERVER['REMOTE_ADDR'];
	$str2 = $time;
	$str3 = $date;
	$str4 = $name_input;  
	$str5 =  $comment_input;
//echo " $str1 : $date : $time <br>"; 
$query = "INSERT INTO stream.contact (`id`, `ip`, `time`, `date`, `name`, `comment`) VALUES ('' ,'$str1','$str2','$str3','$str4','$str5');";

 #$result = mysqli_query ($connection,$query)  or showerror();	
 $result = mysqli_query ($connection,$query);		
	mysqli_close($connection);
} // end if  $name_input != "Name"


// ******************************************

//<?php
//require("constants.php");

// 1. Create a database connection
//$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
//if (!$connection) {
//    die("Database connection failed: " . mysqli_error());


// 2. Select a database to use 
//$db_select = mysqli_select_db($connection, DB_NAME);
//if (!$db_select) {
//    die("Database selection failed: " . mysqli_error());
//}
//


// *******************************************		

?>
</div>

</div>

<footer class="w3-container w3-black w3-padding-16" >
Copyright © 2018 Skanoodle C.U. | all rights reserved
</footer>

</body>
</html>
