<?php
    include('../session.php');
    $id = $_GET['id'];

    // Process Data
    $sql = "DELETE FROM posts where id=$id";
    $result = mysqli_query($db, $sql);
    
    // Go back To Posts table
    header('Location:index.php');
?>
