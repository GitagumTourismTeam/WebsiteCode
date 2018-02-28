<?php
    include('../session.php');
    $id = $_GET['id'];

    // Process Data
    $sql="SELECT * FROM file_system where id=$id";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $file_name =  $row['file_name'];
    unlink('../../uploads/'.$file_name);

    // Delete From Database
    $sql = "DELETE FROM file_system where id=$id";
    $result = mysqli_query($db, $sql);
    
    // Go back To Posts table
    header('Location:index.php');
?>
