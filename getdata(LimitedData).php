<?php

//THIS FILE IS FOR PART-V:- https://youtu.be/jvDJlVFuJt8

header("Access-Control-Allow-Origin: *");

//Your server name, it will be same for all 000webhost accounts
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

//Connect to MySQL
$mysql = mysqli_connect($servername, $username, $password, $dbname);

//This will contain a JSON array of your data.
$result_array = array();

if(empty($_POST["len"])){
echo "Enter something";
} else {
    $limit = $_POST["len"];
    
//Here all the rows and it's data are selected
$sql = "SELECT firstname, lastname, email FROM users LIMIT $limit";
    
    /* If there are results from database push to result array */
    $result = $mysql->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($result_array, $row);
        }
    }
    
    /*This sends a JSON encded array to client */
    echo json_encode($result_array);
    }
    $mysql->close();
    
    
?>
