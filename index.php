<?php

$servername = "sql100.epizy.com";

$username = "epiz_33171126";

$password = "maiLldDsiWf";

$dbname = "epiz_33171126_mydatabase";

//Connect to MySQL

$mysql = mysqli_connect($servername, $username, $password, $dbname);

//Check connection

if($mysql->connect_error){

echo "Connection failed: ". $mysql->connect_error;

} else {

echo "Connected successfully";

}

?>
