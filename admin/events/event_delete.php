<?php
    include('../session.php');
    $id = $_GET['id'];

    // Process Data
    $sql="SELECT * FROM events where id=$id";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $file_name =  $row['photo_file'];
    unlink('../../img/uploaded/'.$file_name);

    // delete from database
    $sql = "DELETE FROM events where id=$id";
    $result = mysqli_query($db, $sql);
    
    // Go back To Events table
    header('Location:index.php');
?>
