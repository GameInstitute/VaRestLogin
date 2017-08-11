<?php 
session_start(); 
?> 

<?php 
include("../api/config.php");
$verbindung = mysql_connect($dbhost, $dbusername, $dbpassword) 
or die("Verbindung zur Datenbank konnte nicht hergestellt werden"); 
mysql_select_db($dbname) or die ("ERROR"); 

$username = $_POST["username"]; 
$password = $_POST["password"]; 

if($username == "" or $password == ""){
    die('Please enter vaild login data. <a href="../">Login</a>');
}
$abfrage = "SELECT username, password, loginreqkey, banned FROM users WHERE username LIKE '$username' LIMIT 1"; 
$ergebnis = mysql_query($abfrage); 
$row = mysql_fetch_object($ergebnis); 

if($row->password == $password) 
    { 
    $_SESSION["username"] = $username; 
    $_SESSION["authkey"] = $row->loginreqkey;
    $_SESSION["ban"] = $row->banned;
   header("Location: ../index.php?page=dashboard");
    }

else 
    { 
    echo 'Wrong username or password! <a href="../">Login</a>'; 
    } 

?>