<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'rinmovie';
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if(!$conn) echo 'connect db failed';
?>