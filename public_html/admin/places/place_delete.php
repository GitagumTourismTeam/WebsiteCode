<?php
    include('../session.php');
    $id = $_GET['id'];

    // Process Data
    $sql = "DELETE FROM places where id=$id";
    $result = mysqli_query($db, $sql);
    
    // Go back To Places table
    header('Location:index.php');
?>
