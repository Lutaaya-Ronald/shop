<?php

//THIS FILE IS FOR PART-IV:- https://youtu.be/SgnrZJ52GNU

    header("Access-Control-Allow-Origin: *");
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

//This will contain a array of your data from database
$result_array = array();

//This will select the specified columns-rows from the database
$sql = "SELECT firstname, lastname, email FROM users ";
    
    /* If there are results from database push to result array */
    $result = $mysql->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($result_array, $row);
        }
    }
    
    /*This will send a JSON encded array to client */
    echo json_encode($result_array);
    $mysql->close();
    
    
?>
