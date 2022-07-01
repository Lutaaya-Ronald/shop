<?php
//THIS FILE IS FOR PART-I:- https://youtu.be/3MotOERTW7I

//Your server name, it will be same for all 000webhost accounts
$servername = "localhost";
//Your DB username
$username = "id16312088_wp_d1297a044bb522a6590cea4d3e6e5f71";

//Your DB password
$password = "k-*I_2Dz=0vp3\>Z";

//Your DB name, required if you have two DB and want to connect to a specific one
$dbname = "id16312088_wp_d1297a044bb522a6590cea4d3e6e5f71";

//Connect to MySQL
$mysql = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if($mysql->connect_error){
echo "Connection failed: ". $mysql->connect_error;
} else {
echo "Connected successfully";
}

?>
