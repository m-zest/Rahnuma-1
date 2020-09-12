<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "rehnuma";

    $conn = mysqli_connect($server, $username, $password, $database); // database connection establishment.

    if(!$conn){

        die ("Error :". mysqli_connect_error());
    }

?>