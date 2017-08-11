<?php 
include("../api/config.php");
$verbindung = mysql_connect($dbhost, $dbusername, $dbpassword) 
or die("Verbindung zur Datenbank konnte nicht hergestellt werden"); 

mysql_select_db($dbname) or die ("ERROR"); 

$username = $_POST["username"]; 
$password = $_POST["password"]; 
$password2 = $_POST["password2"]; 
$email = $_POST["email"];

if($username == "" or $password == ""){
 die(header("Location: ../index.php?page=register"));   
}

$SecretKey = mt_rand(1,50);
$authkey = hash_hmac('sha512', $value, $SecretKey);
$result = mysql_query("SELECT uid FROM users WHERE username LIKE '$username'"); 
$menge = mysql_num_rows($result); 

if($menge == 0) 
    { 
    $eintrag = "INSERT INTO users (username, password, loginreqkey, status, rank, level, exp, expneeded, banned, mail) VALUES ('$username', '$password','$authkey','offline', 'user', '1', '0', '1000', '', '$email')"; 
    $eintragen = mysql_query($eintrag); 

    if($eintragen == true) 
        { 
     header("Location: ../index.php?page=login");
        } 
    else 
        { 
       header("Location: ../index.php?page=register");
        } 


    } 

else 
    { 
   header("Location: ../index.php?page=register");
    } 
?>