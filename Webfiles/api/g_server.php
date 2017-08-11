<?php
include("config.php");
if($_GET["apireqkey"]==$requestapikey){
	
}
else{
	die("Wrong api request key!");
}


/////////////////////LOGIN/////////////////////////////////
if($_GET["func"]=="get_server"){
//connection to api
$mysqli = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT servername, ip, max, password, online, port FROM server";

if ($stmt = $mysqli->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($servername, $ip, $max, $password, $online, $port);
   echo "{";
    echo "'servernames':";
    while ($stmt->fetch()) {
        echo '["' . $servername . '"],';
        
        
    }
    echo "}";
  
    /* close statement */
    $stmt->close();
}

/* close connection */
$mysqli->close();

}

//////////////////////////////////////////////////////


?>