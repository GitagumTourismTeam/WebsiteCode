<?php
    include('../session.php');
    $id = $_GET['id'];

    // Process Data
    $sql = "DELETE FROM events where id=$id";
    $result = mysqli_query($db, $sql);
    
    // Go back To Events table
    header('Location:index.php');
?>
