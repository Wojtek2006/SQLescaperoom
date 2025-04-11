<?php 

$servername = "localhost";
$username = "root";
$pwd = "";
$db_name = "sql_escape_room";


function connect($servername, $username, $pwd, $db_name) {

    $conn = new mysqli($servername, $username, $pwd, $db_name);

    return $conn;
}

function query($conn, $sql) {

    $result = $conn->query($sql);

    return $result;
}