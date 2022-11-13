<?php
    require 'connectdb.php';
    $id_movie = $_GET['id_movie'];

    $sql = "DELETE FROM movies WHERE id_movie = '".$id_movie."'";
    $result = mysqli_query($conn,$sql);
    header("location:quanly-phim.php");
?>