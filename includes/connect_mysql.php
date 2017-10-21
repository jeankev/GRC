<?php
function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "Jeankev1337?";
    // Create connection
    $conn = new mysqli("$servername", "$username", "$password");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Check connection
    echo "Connected successfully";
}
?>
