<?php
include("api/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sparkfire - Webinterface</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                 
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <?php if($_GET["page"]=="dashboard"){}else{ ?>
                    <li>
                        <a href="?page=login">Login</a>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="?page=stats">Stats</a>
                    </li>
                    <?php if($_GET["page"]=="dashboard"){}else{ ?>
                    <li>
                        <a href="?page=register">Register</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="alert alert-info" role="alert">Welcome to the Sparkfire Webinterface - <a href="https://forums.unrealengine.com/showthread.php?94421-FREE-VaRest-Login-System-With-PHP-and-MySQL">Coded by Marc Fraedrich</a></div>
        <div class="row">
            <div class="col-lg-4">
               <?php if($_GET["page"]=="login"){ ?>
            <?php if($_SESSION["authkey"]=="") {
                                                }
                                                else
                                                { 
    header("Location: ./index.php?page=dashboard"); 
                                                } 
                ?>
             <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Login<small> This system is cool!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" method="post" action="interface/action.php">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="username" id="username" class="form-control input-sm floatlabel" placeholder="Username">
			    					</div>
			    				</div>
			    	
			    			</div>


			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				
			    			</div>
			    			
			    			<input type="submit" value="Login" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
                
<?php } ?>
                
                
<?php if($_GET["page"]=="stats"){ ?>
                
                
                
<?php
$mysqli = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = $mysqli->query("SELECT status FROM users WHERE status='online'")) {
    $row_cnt = $result->num_rows;
   $onlineusers = $row_cnt;
    $result->close();
}

$mysqli->close();

$mysqli2 = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
if ($result2 = $mysqli2->query("SELECT serverid FROM server")) {
    $row_cnt2 = $result2->num_rows;
   $server = $row_cnt2;
    $result2->close();
}
$mysqli2->close();

    $mysqli4 = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result4 = $mysqli4->query("SELECT status FROM users WHERE status='offline'")) {
    $row_cnt4 = $result4->num_rows;
   $offlineusers = $row_cnt4;
    $result4->close();
    
    
}
    
    
    $mysqli4 = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result4 = $mysqli4->query("SELECT banned FROM users WHERE banned='true'")) {
    $row_cnt4 = $result4->num_rows;
   $bannedusers = $row_cnt4;
    $result4->close();
    
    
}
        $mysqli4 = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result4 = $mysqli4->query("SELECT uid FROM users")) {
    $row_cnt4 = $result4->num_rows;
   $registeredusers = $row_cnt4;
    $result4->close();
    
    
}
?>
                
                
                
                
                <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Sparkfire <small>API</small></h3>
			 			</div>
			 			<div class="panel-body">
			    	 <h4> Players Online: <?php echo $onlineusers; ?> </h4>
                            <h4> Players Offline: <?php echo $offlineusers; ?> </h4>
                             <h4> Banned Players: <?php echo $bannedusers; ?> </h4>
                             <h4> Players registered: <?php echo $registeredusers; ?> </h4>
                          
                <h4> Server: <?php echo $server; ?> </h4>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
            
                <?php } ?>
                <?php if($_GET["page"]=="dashboard"){ ?>
                   <?php 
                                                     session_start(); 
                ?> 

<?php 
if(!isset($_SESSION["username"])) 
   { 
   header("Location: ./index.php?page=login");
   exit; 
   } 
?> 
                <?php
$username = $_SESSION["username"];
?>
                
                <div class="container">
        <div class="row">
        <div class="">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Welcome, <?php echo $username; ?></h3>
                   
			 			</div>
			 			<div class="panel-body">
			    	
                            AUTH KEY: <?php echo $_SESSION["authkey"]; ?> <br/>
                             Status: <?php if($_SESSION["ban"]=="")
{
    echo "Ok"; 
}else
{
echo "Banned!"; 
} 
                            ?> 
                            <form action="interface/logout.php"><input type="submit" value="Logout" class="btn btn-info btn-block"></form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
                            <?php } ?>
                <?php if($_GET["page"]=="register"){ ?>
                

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
                
        		<div class="panel-heading">
			    		<h3 class="panel-title">Sign up for Sparkfire <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" action="interface/register.php" method="post">
			    			<div class="row">
			    				  <div class="alert alert-danger" role="alert">NOTE: No passwords are encrypted. To encrypt passwords you need to implement md5 or sha512 in api and unreal engine.</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
                                  
			    					<div class="form-group">
			    						<input type="text" name="username" id="username" class="form-control input-sm" placeholder="Username">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password2" id="password2" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
                
                
                    <?php } ?>
            </div>
        </div>
    </div>
    <!-- /.container -->
    
    
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="panel panel-default">
                <div class="panel-body">
                </div>
                    
                    <?php
$total_time = round((microtime(TRUE)-$_SERVER['REQUEST_TIME_FLOAT']), 4);
?>
                   Page generated in <?php echo $total_time; ?> seconds.</div><br/>
                <p><a href="https://forums.unrealengine.com/showthread.php?94421-FREE-VaRest-Login-System-With-PHP-and-MySQL">Coded by Marc Fraedrich</a></p>
                
                    
                </div>
            </div>
        </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
