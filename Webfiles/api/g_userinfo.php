<?php
//get_userinfo.php

include("config.php");
if($_GET["apireqkey"]==$requestapikey){
	
}
else{
	die("Wrong api request key!");
}

//die("test");

/////////////////////LOGIN/////////////////////////////////
if($_GET["func"]=="login"){
//connection to api
$mysqli = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$username = $_GET["user"];
$password = $_GET["passwd"];


$query = "SELECT username, password, loginreqkey, banned FROM users WHERE username='$username' and password='$password'";

if ($stmt = $mysqli->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($username, $password, $loginreqkey, $gbanned);
    while ($stmt->fetch()) {
     echo "{";
	 echo '"state": "success",';
        echo '"loginreqkey": "' . $loginreqkey . '",';
         echo '"banstatus": "' . $gbanned . '"';
        echo "}";
    }

    /* close statement */
    $stmt->close();
}

/* close connection */
$mysqli->close();

}

//////////////////////////////////////////////////////
//////////////////GET BASICSTATES/////////////////////

if($_GET["func"]=="getinfo_basic"){
//connection to api
$mysqli = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$req = $_GET["req"];



$query = "SELECT username, status, rank, level, exp, expneeded FROM users WHERE loginreqkey='$req'";

if ($stmt = $mysqli->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($gusername, $gstate, $grank, $glevel, $gexp, $gexpn);
    while ($stmt->fetch()) {
     echo "{";
	 echo '"state": "' . $gstate . '",';
        echo '"username": "' . $gusername . '",';
        echo '"rank": "' . $grank . '",';
        echo '"level": "' . $glevel . '",';
        echo '"exp": "' . $gexp . '",';
        echo '"expneeded": "' . $gexpn . '"';
        echo "}";
    }

    /* close statement */
    $stmt->close();
}

/* close connection */
$mysqli->close();

}

///////////////////////////////////////////////////////
///////////////UPDATE ONLINE STATUS///////////////////

if($_GET["func"]=="u_status"){
    
$conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$status = $_GET["status"];
$req = $_GET["req"];
    
$sql = "UPDATE users SET status='$status' WHERE loginreqkey='$req'";

if ($conn->query($sql) === TRUE) {
    echo "successfully";
} else {
    echo "error" . $conn->error;
}

$conn->close();
}

?>
